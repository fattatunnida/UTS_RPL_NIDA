<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelamar</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        /* Styling Global */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5EFE7; /* Soft Cream (From your theme) */
            color: #3a3a3a; /* Dark Gray */
        }

        header {
            padding: 20px;
            background-color: #213555; /* Dark Blue (From your theme) */
            text-align: center;
            color: #F5EFE7; /* Light Cream */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-family: 'Roboto', sans-serif; /* Changed to Roboto for header */
            font-size: 3.5em; /* Increased font size */
            margin: 0;
            font-weight: 700;
        }

        .content {
            padding: 40px 20px;
            max-width: 600px;
            margin: auto;
            background-color: #ffffff; /* White */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 40px; /* Added margin to move content down a bit */
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px; /* Increased gap to add more space between inputs */
        }

        label {
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"] {
            padding: 12px 15px; /* Increased padding for better look */
            font-size: 1em;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        input:focus {
            outline: none;
            border-color: #c6e7ff; /* Light Blue from previous theme */
            box-shadow: 0 0 5px rgba(198, 231, 255, 0.8);
        }

        .actions {
            display: flex;
            gap: 15px;
        }

        button,
        a {
            color: #F5EFE7; /* Light Cream */
            padding: 12px 20px; /* Adjusted padding for better size */
            border: none;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
        }

        /* Blue button (Simpan) */
        button {
            background-color: #3E5879; /* Blue (From your theme) */
        }

        /* Red button (Batal) */
        a {
            background-color: #E74C3C; /* Red (From your theme) */
        }
    </style>
</head>
<body>
    <header>
        <h1>Tambah Pelamar</h1>
    </header>

    <div class="content">
        <form action="{{ route('pelamar.store') }}" method="POST">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" required>

            <div class="actions">
                <button type="submit">Simpan</button>
                <a href="{{ route('pelamar.index') }}">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
