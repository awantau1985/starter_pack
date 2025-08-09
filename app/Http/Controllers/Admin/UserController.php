<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelHasRole;
use App\Models\Role as ModelsRole;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    function __construct()
    {
         $this->middleware('permission:User-List|User-Create|User-Update|User-Delete', ['only' => ['index','store']]);
         $this->middleware('permission:User-Create', ['only' => ['create','store']]);
         $this->middleware('permission:User-Update', ['only' => ['edit','update']]);
         $this->middleware('permission:User-Delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data = User::where('is_status','!=',3)->get();
        $roles = ModelsRole::all();
        return view('user.index',compact('data','roles'));
    }

    public function user_list()
    {
        $users = User::where('is_status','!=',3)->get();
        return DataTables::of($users)
            ->addColumn('roles', function($row) {
                if (!empty($row->getRoleNames())) {
                    $badges = '';
                    foreach ($row->getRoleNames() as $role) {
                        $badges .= '<label class="badge badge-success" style="margin-right:3px;">'.$role.'</label>';
                    }
                    return $badges;
                }
                return '-';
            })
            ->addColumn('action', function($row){
                $btn = '<button class="btn btn-sm btn-primary edit-btn" data-id="'.$row->id.'" style="margin-right:5px;">
                            <i class="fas fa-edit"></i>
                        </button>';
                $btn .= '<button class="btn btn-sm btn-danger delete-btn" data-id="'.$row->id.'">
                            <i class="fas fa-trash"></i>
                        </button>';
                return $btn;
            })
            ->addColumn('status', function($row) {
                // Gunakan helper UserStatus
                return UserStatus($row->is_status);
            })
            ->editColumn('created_at', function($row) {
                // Format contoh: 09-08-2025 17:07
                return Carbon::parse($row->created_at)->timezone('Asia/Jakarta')->format('d-m-Y H:i');
            })
            ->rawColumns(['action','roles','status'])
            ->make(true);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()->all()
            ], 422);
        }

        $user = User::create([
            'name' => $request->username,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $user->assignRole($request->role_name);

        return redirect('users')->with(['toast_type' => 'success',
                                        'toast_message' => 'Data berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'is_status' => $user->is_status,
            'roles' => $user->getRoleNames()->toArray(), // <-- array of strings
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->ajax()) {
            try {
                // Validasi input
                $request->validate([
                    'name'      => 'required|string|max:255',
                    'email'     => 'required|email|unique:users,email,' . $id,
                    'is_status' => 'required',
                    'roles'     => 'required',
                ]);

                // Cari user
                $user = User::findOrFail($id);
                $user->name = $request->name;
                $user->username = $request->name;
                $user->email = $request->email;
                $user->is_status = $request->is_status;
                $user->save();

                // Update role
                $user->assignRole($request->roles);

                return response()->json([
                    'success' => true,
                    'message' => 'Data user berhasil diperbarui',
                ]);

            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
                ], 500);
            }
        }

        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->is_status = 3;
        $user->save();

        return response()->json(['message' => 'User berhasil dihapus!']);
    }
}
