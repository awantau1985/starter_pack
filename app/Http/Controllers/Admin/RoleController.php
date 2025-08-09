<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\RoleHasPermission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
         $this->middleware('permission:Role-List|Role-Create|Role-Update|Role-Delete', ['only' => ['index','store']]);
         $this->middleware('permission:Role-Create', ['only' => ['create','store']]);
         $this->middleware('permission:Role-Update', ['only' => ['edit','update']]);
         $this->middleware('permission:Role-Delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $role = Role::all();
        return view('role_permission.index',compact('role'));
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
        //
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
        $role = Role::find($id);
        $permission = Permission::all();
        $role_permission = RoleHasPermission::where('role_id',$id)->pluck('permission_id')->toarray();
        return view('role_permission.edit',compact('role','permission','role_permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        RoleHasPermission::where('role_id',$id)->delete();
        $permissionNames = Permission::whereIn('id', $request->permission_id ?? [])->pluck('name')->toArray();
        $role= Role::find($id);
        $role->givePermissionTo($permissionNames);
        return redirect('roles')->with(['toast_type' => 'success',
                                        'toast_message' => 'Data berhasil disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
