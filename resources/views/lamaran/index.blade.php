<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lamaran Pekerjaan</title>
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

        .top-right {
            position: absolute;
            top: 20px;
            right: 40px;
            display: flex;
            gap: 10px;
        }

        .top-right a, .top-right button {
            background: none;
            border: none;
            color: #F5EFE7;
            font-size: 1em;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
        }

        .content {
            padding: 60px 20px;
            max-width: 1200px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .actions {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 20px;
        }

        .actions a {
            background-color: #3E5879;
            color: #F5EFE7;
            padding: 14px 28px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            font-family: 'Roboto', sans-serif;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 18px;
            text-align: center;
        }

        table th {
            background-color: #3E5879;
            color: #F5EFE7;
            text-transform: uppercase;
            font-weight: 600;
            font-family: 'Roboto', sans-serif;
        }

        button {
            background-color: #E74C3C;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    <header>
        <h1>Daftar Lamaran Pekerjaan</h1>
        <div class="top-right">
            <a href="{{ route('halaman') }}">Halaman Utama</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="all: unset; color: #F5EFE7; font-family: 'Roboto', sans-serif; cursor: pointer;">Logout</button>
            </form>
        </div>
    </header>

    <div class="content">
        <div class="actions">
            <a href="{{ route('lamaran.create') }}">Tambah Lamaran</a>
        </div>

        @if(session('success'))
            <p style="color: green; font-weight: 500; font-family: 'Roboto', sans-serif;">{{ session('success') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Lowongan</th>
                    <th>Pelamar</th>
                    <th>Tanggal Lamaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lamarans as $lamaran)
                    <tr>
                        <td>{{ $lamaran->lowongan->judul }}</td>
                        <td>{{ $lamaran->pelamar->nama }}</td>
                        <td>{{ $lamaran->tanggal_lamaran }}</td>
                        <td>
                            <form action="{{ route('lamaran.destroy', $lamaran->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
