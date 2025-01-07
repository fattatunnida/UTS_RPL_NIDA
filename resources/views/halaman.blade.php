<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5EFE7; /* Soft Cream */
            color: #3a3a3a; /* Dark Gray */
        }

        header {
            padding: 60px 20px;
            background-color: #213555; /* Dark Blue */
            text-align: center;
            color: #F5EFE7; /* Light Cream */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 3.5em;
            margin: 0;
            font-weight: 700;
        }

        header p {
            font-size: 1.2em;
            font-weight: 300;
            margin-top: 10px;
        }

        .menu-section {
            padding: 50px 20px;
            text-align: center;
            background-color: #ffffff; /* White */
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            max-width: 1200px;
            margin: 40px auto;
        }

        .menu-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .menu-buttons a {
            display: inline-block;
            padding: 18px 36px;
            font-size: 1.1em;
            color: #F5EFE7; /* Light Cream */
            text-decoration: none;
            background-color: #3E5879; /* Blue */
            border-radius: 8px;
            font-weight: 500;
            text-transform: uppercase;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        .menu-buttons a:hover {
            background-color: #213555; /* Dark Blue */
            transform: translateY(-5px);
        }

        footer {
            padding: 20px;
            background-color: #213555; /* Dark Blue */
            color: #F5EFE7;
            text-align: center;
            font-size: 0.9em;
            font-weight: 300;
        }

        footer p {
            margin: 0;
        }

        h2 {
            font-size: 2.2em;
            margin-bottom: 25px;
            font-weight: 500;
            color: #3a3a3a; /* Dark Gray */
        }
    </style>
</head>
<body>
    <header>
        <h1>Hallo! Selamat Datang di Job Application Tracker</h1>
        <p>Jelajahi peluang dan pantau proses lamaran kerja dengan mudah.</p>
    </header>

    <div class="menu-section">
        <h2>Menu Utama</h2>
        <div class="menu-buttons">
            <a href="{{ route('lowongan.index') }}">Lowongan</a>
            <a href="{{ route('pelamar.index') }}">Pelamar</a>
            <a href="{{ route('lamaran.index') }}">Lamaran</a>
        </div>
    </div>

    <footer>
        <p>&copy; Job Application Tracker. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
