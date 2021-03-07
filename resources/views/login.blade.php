<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fooder</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Raleway:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/login.css">
    </head>
    
    <body>
        @include('modules.nav')
        <main>
            <h1 class="pagename">Fooder</h1>
            <h2 class="subtitle">Login</h2>
            <form method="POST">
                @csrf
                <label>
                    <input class="formtext" name="email" type="email" required autofocus value="{{ old('email') }}" placeholder="Email">
                </label><br>
                @error('email') {{ $message }} @enderror
                <label>
                    <input class="formtext" name="password" type="password" required placeholder="Password">
                </label>
                @error('password') {{ $message }} @enderror <br>
                <label>
                    <input type="checkbox" name="remember" id="remember">
                    Remember me
                </label><br>
                <button class="button-login" type="submit">Login</button>

                <p>Don't have an account?</p>
                <a class="signup" href="/register">Sign up</a>
            </form>
        </main>
        @include('modules.footer')
    </body>
</html>