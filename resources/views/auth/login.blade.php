

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f675d17672.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/index.css">
    <style>
        body {
            background-image: url('images/loginbg9.svg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .login-card {
            position: relative;
            z-index: 3;
            width: 100%;
            margin: 0 20px;
            padding: 70px 30px 44px;
            border-radius: 1.25rem;
            background: #ffffff94;
            text-align: center;
        }

        .login-card>h2 {
            color: var(--pblue-color);
            font-size: 36px;
            font-weight: 700;
            margin: 0 0 12px;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div id="login_container">
        <div class="container d-flex justify-content-center align-items-center min-vh-100" id="login-box">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: url('images/psuschool.png'); background-size: cover; background-position: center;">
                </div>
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="featured-image mb-3" style="text-align: center;">
                            <img src="images/logo/psu_logo.png" class="img-fluid center-image" style="width: 100px; margin-bottom: 5px;">
                        </div>
                        <div class="header-text mb-4 text-center">
                            <h2 class="fw-bold fs-1 pt-lg-5" style="color: #0c24db">LOGIN</h2>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input id="email" name="email" type="email" class="form-control form-control-lg bg-light fs-6" autocomplete="email" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group mb-1">
                                <label for="password">Password:</label>
                                <div class="password-container">
                                    <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6" autocomplete="current-password" required />
                                </div>
                                <x-input-error :messages="$errors->get('password')"
                            </div>
                            <small>@if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif</small>
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <div class="my-3">
                                <button name="login" id="login" class="btn w-100 fs-6" style="background-color: #0c24db; color: white">{{ __('Log in') }}</button>
                            </div>
                        </form>
                        <div class="row text-center" style="font-size: small;">
                            <small>Don't have an account? <a href="{{ route('register') }}" style="color: #0c24db; text-decoration: none;" id="register-btn">Register here</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
