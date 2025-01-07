<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
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
            padding: 60px 20px;
            background-color: #213555;
            text-align: center;
            color: #F5EFE7;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 3.5em;
            margin: 0;
            font-weight: 700;
        }

        .content {
            padding: 60px 20px;
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: 500;
        }

        input[type="email"] {
            padding: 14px 16px;
            font-size: 1em;
            border: 1px solid #cccccc;
            border-radius: 8px;
        }

        input:focus {
            outline: none;
            border-color: #6a1e55;
            box-shadow: 0 0 5px rgba(166, 77, 121, 0.8);
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        button, a {
            color: #F5EFE7;
            padding: 16px 36px;
            border: none;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.3s;
        }

        button {
            background-color: #3E5879;
        }

        /* Removed the hover effect */
        /* button:hover {
            background-color: #213555;
            transform: translateY(-5px);
        } */

        a {
            background-color: transparent;
            color: #213555;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Forgot Password</h1>
    </header>

    <div class="content">
        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label for="email">Email:</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus>
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />

            <div class="actions">
                <button type="submit">Email Password Reset Link</button>
            </div>
        </form>
    </div>
</body>
</html>
