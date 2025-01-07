<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelamar</title>
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
            max-width: 1200px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            font-size: 1em;
            color: #F5EFE7;
            text-decoration: none;
            background-color: #3E5879;
            border-radius: 8px;
            font-weight: 500;
            text-transform: uppercase;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.2s;
        }

        .btn:active {
            background-color: #213555;
        }

        .success-message {
            padding: 20px;
            background-color: #D8C4B6;
            border: 1px solid #3E5879;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 1.1em;
            text-align: center;
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
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .edit-btn, .delete-btn {
            width: 120px;
            height: 45px;
            line-height: 45px;
            text-align: center;
            display: inline-block;
            border-radius: 8px;
            transition: background-color 0.2s;
            font-weight: 600;
            text-transform: uppercase;
        }

        .delete-btn {
            background-color: #E74C3C;
        }

        .actions button, .actions .btn {
            color: #F5EFE7;
            border: none;
            padding: 0;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.2s;
        }

        .actions .btn:active, .actions button:active {
            background-color: #213555;
        }

        .top-right {
            position: absolute;
            top: 20px;
            right: 40px;
            display: flex;
            gap: 10px;
        }

        .left-align {
            text-align: left;
            margin-bottom: 30px;
        }

        .logout-text, .home-text {
            font-size: 1em;
            font-weight: 500;
            color: #F5EFE7;
            text-decoration: none;
            text-transform: uppercase;
            transition: color 0.2s;
        }

        .logout-text:hover, .home-text:hover {
            color: #a64d79;
        }
    </style>
</head>
<body>
    <header>
        <h1>Daftar Pelamar</h1>
        <div class="top-right">
            <a href="{{ route('halaman') }}" class="home-text">Halaman Utama</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="all: unset; color: #F5EFE7; font-family: 'Roboto', sans-serif; cursor: pointer;">Logout</button>
            </form>
        </div>
    </header>

    <div class="content">
        <div class="left-align">
            <a href="{{ route('pelamar.create') }}" class="btn">Tambah Pelamar</a>
        </div>

        @if(session('success'))
            <p class="success-message">{{ session('success') }}</p>
        @endif

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pelamars as $pelamar)
                    <tr>
                        <td>{{ $pelamar->nama }}</td>
                        <td>{{ $pelamar->email }}</td>
                        <td>{{ $pelamar->nomor_telepon }}</td>
                        <td>
                            <div class="actions">
                                <a href="{{ route('pelamar.edit', $pelamar->id) }}" class="btn edit-btn">Edit</a>
                                <form action="{{ route('pelamar.destroy', $pelamar->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
