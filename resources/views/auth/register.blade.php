<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5EFE7;
            color: #3a3a3a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            padding: 60px 20px;
            max-width: 600px;
            width: 100%;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        h1 {
            font-family: 'Roboto', sans-serif;
            color: #213555;
            font-size: 3em;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-align: left;
        }

        label {
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
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

        button:hover {
            background-color: #213555;
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
    <div class="content">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required autofocus>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="actions">
                <a href="{{ route('welcome') }}">Already registered?</a>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
