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
                            <h2 class="fw-bold fs-1 pt-lg-5" style="color: #0c24db">REGISTER</h2>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="firstName">First Name:</label>
                                <input id="firstName" name="firstName" type="text" class="form-control form-control-lg bg-light fs-6" autocomplete="firstName" required>
                                <x-input-error :messages="$errors->get('firstName')" class="mt-2" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="lastName">Last Name:</label>
                                <input id="lastName" name="lastName" type="text" class="form-control form-control-lg bg-light fs-6" autocomplete="lastName" required>
                                <x-input-error :messages="$errors->get('lastName')" class="mt-2" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="role">Role:</label>
                                <select id="role" name="role" class="form-control form-control-lg bg-light fs-6" required>
                                    <option value=""><--Select Role--></option>
                                    <option value="admin">Admin</option>
                                    <option value="instructor">Instructor</option>
                                </select>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input id="email" name="email" type="email" class="form-control form-control-lg bg-light fs-6" autocomplete="email" required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password:</label>
                                <input id="password" name="password" type="password" class="form-control form-control-lg bg-light fs-6" autocomplete="new-password" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password:</label>
                                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control form-control-lg bg-light fs-6" autocomplete="new-password" required>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="my-3">
                                <button name="register" id="register" class="btn w-100 fs-6" style="background-color: #0c24db; color: white">{{ __('Register') }}</button>
                            </div>
                        </form>
                        <div class="row text-center" style="font-size: small;">
                            <small>Already have an account? <a href="{{ route('login') }}" style="color: #0c24db; text-decoration: none;" id="register-btn">Login here</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
