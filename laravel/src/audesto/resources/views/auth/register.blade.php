<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audesto</title>
    <link rel="stylesheet" href="{!! url('assets/css/auth/bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! url('assets/css/auth/login.css') !!}">
    <script src="{!! url('assets/js/login.js') !!}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css.css">
</head>
<?php

?>
<body class="text-center">
    <header>
    </header>
    <section class="main-section">

        <div class="container">
            <form method="post" action="{{ route('login.perform') }}">
            @csrf
                <div class="user signinbox">
                    <div class="imagebox">
                        <img src="{!! url('images/voiture.jpg') !!}">
                    </div>
                    <div class="formbox">
                        <div class="form">
                            <h2>Sign in</h2>
                            <input type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                            @if ($errors->has('username'))
                            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                            <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                            @if ($errors->has('password'))
                            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                            <input type="submit"  value="Login">
                            <p class="signup-text">Don't have an account? <a href="#" onClick="toggleform();">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </form>
            <form method="post" action="{{ route('register.perform') }}">
            @csrf
                <div class="user signupbox">
                    <div class="formbox">
                        <div class="form">
                            <h2>Sign up</h2>
                            <input type="text" placeholder="username" name="usernamereg">
                            <input type="email" name="emailreg" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                            <input type="text" name="namereg" value="{{ old('name') }}" placeholder="Nom Complet" required="required">
                            <input type="password" name="passwordreg" value="{{ old('password') }}" placeholder="Password" required="required">
                            <input type="submit" value="Signup">
                            <p class="signup-text">Already have an account?
                                <a href="#" onClick="toggleform();">Login</a>
                            </p>
                        </div>
                    </div>
                    <div class="imagebox">
                        <img src="{!! url('images/voiture2.jpg') !!}">
                    </div>
                </div>
            </form>
        </div>
        </form>
    </section>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>

</html>