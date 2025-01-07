<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #3b1c32; /* Dark Purple */
            color: #F5EFE7; /* Soft Cream */
            line-height: 1.6;
        }

        header {
            padding: 80px 20px;
            background-color: #6a1e55; /* Rich Purple */
            text-align: center;
            color: #F5EFE7;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        header h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 4em;
            margin: 0;
            text-transform: uppercase;
        }

        header p {
            font-size: 1.3em;
            font-weight: 300;
            margin-top: 10px;
        }

        .menu-section {
            padding: 60px 20px;
            text-align: center;
            background-color: #1a1a1d; /* Deep Black */
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            max-width: 1200px;
            margin: 40px auto;
        }

        .menu-buttons {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .menu-buttons a {
            display: inline-block;
            padding: 20px 40px;
            font-size: 1.2em;
            color: #F5EFE7; /* Soft Cream */
            text-decoration: none;
            background-color: #a64d79; /* Soft Pink */
            border-radius: 8px;
            font-weight: 500;
            text-transform: uppercase;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        .menu-buttons a:hover {
            background-color: #6a1e55; /* Rich Purple */
            transform: translateY(-5px);
        }

        footer {
            padding: 25px;
            background-color: #6a1e55; /* Rich Purple */
            color: #F5EFE7;
            text-align: center;
            font-size: 1em;
            font-weight: 300;
        }

        footer p {
            margin: 0;
        }

        h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            font-weight: 500;
            color: #F5EFE7;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hallo! Selamat Datang di Job Application Tracker by Nida</h1>
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
        <p>&copy; 2024 Nida's Job Application Tracker. Semua hak dilindungi.</p>
    </footer>
</body>
</html>
