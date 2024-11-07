<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            background: linear-gradient(to bottom, #000B58, #003161, #006A67);
            color: #FFF4B7;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .welcome-container {
            text-align: center;
            background-color: #FFF4B7;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: #000B58;
        }
        h1 {
            font-size: 2.5em;
            color: #000B58;
            margin-bottom: 20px;
        }
        .button {
            background-color: #000B58;
            color: #FFF4B7;
            padding: 15px 30px;
            margin: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 1em;
            text-decoration: none;
            display: inline-block;
        }
        .button:hover {
            background-color: #003161;
            color: #FFF4B7;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Hallo! Selamat datang di Job Application Tracker by Nida</h1>
        <a href="{{ url('job_postings') }}" class="button">Daftar Lowongan</a>
        <a href="{{ url('applicants') }}" class="button">Daftar Pelamar</a>
        <a href="{{ url('applications') }}" class="button">Daftar Aplikasi</a>
    </div>
</body>
</html>
