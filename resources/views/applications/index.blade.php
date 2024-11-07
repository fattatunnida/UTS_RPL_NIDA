<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications</title>
    <style>
        body {
            background-color: #000b58;
            color: #fff4b7;
            font-family: Arial, sans-serif;
        }
        h1 {
            background-color: #003161;
            color: #fff4b7;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        table, th, td {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #006a67;
            padding: 10px;
        }
        th {
            background-color: #006a67;
            color: #fff4b7;
        }
        tr:nth-child(even) {
            background-color: #003161;
        }
        a, button {
            background-color: #006a67;
            color: #fff4b7;
            padding: 8px 16px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .add-button {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #003161;
        }
    </style>
</head>
<body>
    <h1>Daftar Applications</h1>
    <a href="{{ route('applications.create') }}" class="add-button">Tambah Application</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Applicant</th>
                <th>Posisi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->applicant->nama }}</td>
                    <td>{{ $application->posisi }}</td>
                    <td>{{ $application->status }}</td>
                    <td>
                        <a href="{{ route('applications.edit', $application->id) }}">Edit</a>
                        <form action="{{ route('applications.destroy', $application->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>