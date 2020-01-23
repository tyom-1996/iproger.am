<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/signup/signup.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    @include('includes.header')

    <section class="choose-signup-block" >
        <div class="choose-signup-block-wrap">
            <p class="sign-title">
                Join our global platform iProger as candidate or as an employer
            </p>
            <hr>
            <div style="font-size: 13px;text-align: center;color: #463c3c;margin-bottom: 25px;">Please select the role that best describes you.</div>

            <ul class="sign-list">
                <li class="sign-list-item">
                    <a href="{{route('signup_candidates')}}">As candidates</a>
                </li>
                <li class="sign-list-item">
                    <a href="{{route('signup_employers')}}">As employers</a>
                </li>
            </ul>
            <hr>
            <p class="auth-instruction">
                Already registered?
                <a href="{{route('login')}}">Sign In</a>
            </p>

        </div>
    </section>

    @include('includes.footer')

</body>
</html>
