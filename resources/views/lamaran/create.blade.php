<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lamaran</title>
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

        input, select {
            padding: 12px 15px;
            font-size: 1em;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #c6e7ff;
            box-shadow: 0 0 5px rgba(198, 231, 255, 0.8);
        }

        .actions {
            display: flex;
            gap: 15px;
            justify-content: flex-start;
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
            background-color: #E74C3C;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tambah Lamaran Pekerjaan</h1>
    </header>

    <div class="content">
        <form action="{{ route('lamaran.store') }}" method="POST">
            @csrf
            <label for="id_lowongan">Lowongan:</label>
            <select id="id_lowongan" name="id_lowongan" required>
                <option value="">Pilih Lowongan</option>
                @foreach($lowongans as $lowongan)
                    <option value="{{ $lowongan->id }}">{{ $lowongan->judul }}</option>
                @endforeach
            </select>

            <label for="id_pelamar">Pelamar:</label>
            <select id="id_pelamar" name="id_pelamar" required>
                <option value="">Pilih Pelamar</option>
                @foreach($pelamars as $pelamar)
                    <option value="{{ $pelamar->id }}">{{ $pelamar->nama }}</option>
                @endforeach
            </select>

            <label for="tanggal_lamaran">Tanggal Lamaran:</label>
            <input type="date" id="tanggal_lamaran" name="tanggal_lamaran" required>

            <div class="actions">
                <button type="submit">Simpan</button>
                <a href="{{ route('lamaran.index') }}">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
