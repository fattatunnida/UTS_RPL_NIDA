<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelamar</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        /* Styling Global */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5EFE7; /* Soft Cream */
            color: #3a3a3a; /* Dark Gray */
        }

        header {
            padding: 20px;
            background-color: #213555; /* Dark Blue */
            text-align: center;
            color: #F5EFE7; /* Light Cream */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 3.5em; /* Larger font size */
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
            margin-top: 40px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: 500;
        }

        input[type="text"],
        input[type="email"] {
            padding: 12px 15px;
            font-size: 1em;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        input:focus {
            outline: none;
            border-color: #c6e7ff; /* Light Blue */
            box-shadow: 0 0 5px rgba(198, 231, 255, 0.8);
        }

        .actions {
            display: flex;
            gap: 15px;
        }

        button,
        a {
            color: #F5EFE7; /* Light Cream */
            padding: 12px 20px;
            border: none;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
        }

        /* Blue button (Simpan) */
        button {
            background-color: #3E5879; /* Blue */
        }

        /* Red button (Batal) */
        a {
            background-color: #E74C3C; /* Red */
        }
    </style>
</head>
<body>
    <header>
        <h1>Edit Pelamar</h1>
    </header>

    <div class="content">
        <form action="{{ route('pelamar.update', $pelamar->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $pelamar->nama }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $pelamar->email }}" required>

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ $pelamar->nomor_telepon }}" required>

            <div class="actions">
                <button type="submit">Simpan</button>
                <a href="{{ route('pelamar.index') }}">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
