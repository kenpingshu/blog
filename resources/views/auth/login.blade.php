<!DOCTYPE html>
<html>
    <head>
        <title>Sample App</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div class="main">
            <!-- resources/views/auth/login.blade.php -->

            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}

                <div>
                    Email
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>

                <div>
                    Password
                    <input type="password" name="password" id="password">
                </div>

                <div>
                    <input type="checkbox" name="remember"> Remember Me
                </div>

                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
