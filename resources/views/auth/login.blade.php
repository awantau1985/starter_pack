
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>

<body>
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg border-0 rounded-4" style="max-width: 400px; width: 100%;">
        <div class="card-body p-4">
            <h4 class="text-center mb-4">Sign In</h4>

           @include('alert.all_alert')

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Username</label>
                    <input id="login" type="text" class="form-control" name="login" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">Don't have an account? <a href="{{ route('register') }}">Sign up</a></small>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/adminlte.min.js?v=3.2.0')}}"></script>
</body>
</html>