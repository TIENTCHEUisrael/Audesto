<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audesto-Admin</title>
    <link rel="stylesheet" href="{!! url('assets/adminassets/css/orther/login.css') !!}">
    <link href="{!! url('assets/adminassets/vendor/fontawesome-free/css/fontawesome.min.css') !!}" rel="stylesheet">
    <script src="{!! url('assets/adminassets/vendor/jquery/jquery.min.js') !!}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="section">
        <div class="container">
            <div class="form">
                <div class="left-side">
                    <div class="content">
                        <h5>Car with confidence</h5>
                        <p>Book securely</p>
                        <img src="{!! url('assets/adminassets/img/orther/voiture.jpg') !!}" width="300" style="border-radius: 10px;margin-top: 20px;">
                    </div>
                    <div class="social">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul class="terms">
                            <li><a href="#">Terms</a></li>
                            <li><span class="dots"></span></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right-side">
                    <div class="forms">
                        <form method="post" action="{{ route('login.adminlogin') }}">
                            @csrf
                            <h1>Sign In</h1>
                            <!-- <div class="form-inputs"> 
                            <input type="text" placeholder="User name"> 
                            <i class="fa fa-user"></i> 
                        </div>  -->
                            <div class="form-inputs">
                                <input type="text" placeholder="Email" autocomplete='chrome-off' name="email">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="form-inputs">
                                <input id="password_input" class="password-input" autocomplete='chrome-off' type="password" placeholder="Password" name="password">
                                <i class="fa fa-lock" id="password_eye"></i>
                            </div>
                            <div class="submit-button">
                                <input type="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>