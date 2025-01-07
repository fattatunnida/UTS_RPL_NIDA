<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5EFE7;
            color: #3a3a3a;
            line-height: 1.6;
        }

        header {
            padding: 40px 20px;
            background-color: #213555;
            text-align: center;
            color: #F5EFE7;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        header h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 3em;
            margin: 0;
            text-transform: uppercase;
        }

        .content {
            padding: 60px 20px;
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: 500;
        }

        input[type="email"], input[type="password"] {
            padding: 12px 15px;
            font-size: 1em;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        input:focus {
            outline: none;
            border-color: #c6e7ff;
            box-shadow: 0 0 5px rgba(198, 231, 255, 0.8);
        }

        .actions {
            display: flex;
            gap: 15px;
            justify-content: space-between;
            align-items: center;
        }

        button, a {
            color: #F5EFE7;
            padding: 14px 28px;
            border: none;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
        }

        button {
            background-color: #3E5879;
        }

        a {
            background-color: transparent;
            color: #213555;
            text-decoration: underline;
            padding: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>

    <div class="content">
        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <label for="email">Email:</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />

            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />

            <div class="flex items-center">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span class="ml-2 text-sm">Remember me</span>
                </label>
            </div>

            <div class="actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                    
                @endif
                    
                <button type="submit">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
