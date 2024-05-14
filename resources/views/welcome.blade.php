<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Attendance Tracker</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('images/psuschool.png');
            height: 100vh;
            width: 100vw;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative; /* Add position relative for z-index */
            z-index: 1; /* Ensure content stays above the background image */
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            z-index: 2; /* Ensure header stays above the background image */
        }
        .logo {
            width: 120px;
        }
        .auth-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
            transition: color 0.3s;
        }
        .auth-links a:hover {
            color: #FF2D20;
        }
        .hero {
            text-align: center;
            margin-top: 50px;
            color: #fff;
            position: relative; /* Add position relative for z-index */
            z-index: 2; /* Ensure content stays above the background image */
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .cta-buttons {
            display: flex;
            justify-content: center;
        }
        .cta-buttons a {
            display: inline-block;
            padding: 15px 30px;
            margin: 0 10px;
            background-color: #0C24DB;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .cta-buttons a:first-child {
            background-color: #0C24DB;
        }
        .cta-buttons a:last-child {
            background-color: #4756C9;
        }
        .cta-buttons a:first-child:hover {
            background-color: #0c0c8c
        }
        .cta-buttons a:last-child:hover {
            background-color: #2e2e7e
        }

    </style>
</head>
<body>
    <header class="container">
        <div class="logo">
            <img src="images/logo/psu_logo.png" alt="Student Attendance Tracker" style="height:75px; width:75px;">
        </div>
        <div class="auth-links">
            @auth
                <a href="{{ url('/dashboard') }}" style="color:white;">Dashboard</a>
            @else
                <a href="{{ route('login') }}" style="color:white;">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" style="color:white;">Register</a>
                @endif
            @endauth
        </div>
    </header>
    <br><br><br>
    <div class="container">
        <div class="hero">
            <h1>Welcome to the Student Tracker Attendance </h1>
            <p>Track student attendance effortlessly and effectively.</p>
            <div class="cta-buttons">
                @auth
                    <a href="{{ url('/dashboard') }}">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}" >Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </div>
</body>
</html>
