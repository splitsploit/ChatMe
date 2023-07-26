<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Load Custom CSS -->
    <style>
        /* Custom CSS for Login Page */
        body, html {
            height: 100%;
        }

        .login-container {
            max-width: 400px;
            margin: auto; /* Center the container */
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 70%; /* Optional, adjust as needed */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center the content vertically */
        }

        .login-title {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }

        .login-form .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }

        .login-form .form-check {
            margin-bottom: 10px;
        }

        .login-form .btn-primary {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Custom CSS */
        .btn-primary {
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Optional: To add space between the elements */
        .ml-3 {
            margin-left: 10px;
        }

    </style>
</head>

<body>
    <div class="login-container">
        <h2 class="login-title">Log In</h2>
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="form-check mb-3">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('register') }}" class="text-decoration-none">Register Account</a>
                <button type="submit" class="btn btn-primary">{{ __('Log in') }}</button>
            </div>
            
        </form>
    </div>

    <!-- Load Bootstrap JS (optional, for certain features like dropdowns) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>