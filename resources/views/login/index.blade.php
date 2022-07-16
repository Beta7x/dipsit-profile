<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}">
    {{-- Google Fonts Montserrat --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins&display=swap" rel="stylesheet">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/login.css">
    {{-- <link rel="stylesheet" href="https://pramukasmapang.herokuapp.com/css/login.css"> --}}
    {{-- BoxIcons --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>DipSit | login</title>
</head>
<body>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="{{ asset('images/scouts1.png')}}" alt="login image">
            </div>

            <div class="login__forms">
                <form action="" class="login__register" id="login-in">
                    
                    <h1 class="login__title">Sign In</h1>
                    <div class="login__box">
                        <i class="bx bx-user login__icon"></i>
                        <input type="text" placeholder="Username" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" class="login__input">
                    </div>

                    <a href="#" class="login__forgot">Forgot password?</a>

                    <a href="#" class="login__button">Sign In</a>

                    <div>
                        <span class="login__account">Don't have an Account ?</span>
                        <span class="login__signin" id="sign-up">Sign Up</span>
                    </div>
                </form>

                <form action="/register" method="post" class="login__create none" id="login-up">
                    <h1 class="login__title">Create Account</h1>
                    @csrf
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" class="login__input" name="username" id="username">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="text" placeholder="Email" class="login__input" name="email" id="email">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" class="login__input" name="password" id="password">
                    </div>

                    <a href="/register" method="post" class="login__button">Sign Up</a>

                    <div>
                        <span class="login__account">Already have an Account ?</span>
                        <span class="login__signup" id="sign-in">Sign In</span>
                    </div>

                    {{-- <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter' ></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google' ></i></a>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
    
    {{-- Javascript --}}
    <script src="{{asset('js/login.js')}}"></script>
    {{-- <script src="https://pramukasmapang.herokuapp.com/js/login.js"></script> --}}
</body>
</html>