<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/login/login.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
@include('includes.header')

<section class="main-section">
    <div class="login-wrap">
        <div class="login-bg" style="background: url(http://localhost:8000/images/login-bg.png);background-size: contain;background-repeat: no-repeat;background-position: center;"></div>

        <div class="login-form-bl">
            <h1 class="login-title">Sign in to your account</h1>
            <div class="login-row">
                <label for="">Email</label>
                <div class="login-row-inp">
                    <input type="text" placeholder="Your email">
                    <div class="error-block"></div>
                </div>
            </div>

            <div class="login-row">
                <label for="">Enter password</label>
                <div class="login-row-inp">
                    <input type="text"  placeholder="Your password">
                    <div class="error-block"></div>
                </div>
            </div>

            <p class="forgot-psw">
                <a  href="/en/registration/registration/forgot-password">Forgot password?</a>
            </p>

            <button id="btn-login">Sign in</button>

            <p class="login-bottom">
                Don't have an account yet? <a class="open-sign-in-btn" href="/en/registration"> Register</a>&nbsp;your account now.
            </p>

        </div>
    </div>
</section>

@include('includes.footer')

</body>
</html>
