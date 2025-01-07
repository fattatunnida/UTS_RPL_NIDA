<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lamaran</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        /* Styling Global */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fbfbfb; /* Soft Cream */
            color: #3a3a3a; /* Dark Gray */
        }

        header {
            padding: 20px;
            background-color: #c6e7ff; /* Light Blue */
            text-align: center;
            color: #3a3a3a; /* Dark Gray */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5em;
            margin: 0;
            font-weight: 700;
        }

        .content {
            padding: 40px 20px;
            max-width: 600px;
            margin: auto;
            background-color: #ffffff; /* White */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 20px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        input, select, button, a {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        select, input {
            background-color: #fbfbfb; /* Soft Cream */
        }

        button {
            background-color: #ffddae; /* Muted Gold */
            color: #3a3a3a; /* Dark Gray */
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #c6e7ff; /* Light Blue */
            transform: translateY(-2px);
        }

        a {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #c6e7ff; /* Light Blue */
            color: #3a3a3a; /* Dark Gray */
            font-weight: 500;
            transition: background-color 0.3s, transform 0.3s;
        }

        a:hover {
            background-color: #ffddae; /* Muted Gold */
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <header>
        <h1>Edit Lamaran Pekerjaan</h1>
    </header>

    <div class="content">
        <form action="{{ route('lamaran.update', $lamaran->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <label for="id_lowongan">Lowongan:</label>
            <select id="id_lowongan" name="id_lowongan" required>
                @foreach($lowongans as $lowongan)
                    <option value="{{ $lowongan->id }}" {{ $lamaran->id_lowongan == $lowongan->id ? 'selected' : '' }}>
                        {{ $lowongan->judul }}
                    </option>
                @endforeach
            </select>

            <label for="id_pelamar">Pelamar:</label>
            <select id="id_pelamar" name="id_pelamar" required>
                @foreach($pelamars as $pelamar)
                    <option value="{{ $pelamar->id }}" {{ $lamaran->id_pelamar == $pelamar->id ? 'selected' : '' }}>
                        {{ $pelamar->nama }}
                    </option>
                @endforeach
            </select>

            <label for="tanggal_lamaran">Tanggal Lamaran:</label>
            <input type="date" id="tanggal_lamaran" name="tanggal_lamaran" value="{{ $lamaran->tanggal_lamaran }}" required>

            <button type="submit">Simpan</button>
            <a href="{{ route('lamaran.index') }}">Batal</a>
            <button type="button" onclick="document.querySelector('form').submit()">Edit</button>
        </form>
    </div>
</body>
</html>
