<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
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
    <h1>Daftar Applicants</h1>
    <a href="{{ route('applicants.create') }}" class="add-button">Tambah Applicant</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applicants as $applicant)
                <tr>
                    <td>{{ $applicant->id }}</td>
                    <td>{{ $applicant->nama }}</td>
                    <td>{{ $applicant->email }}</td>
                    <td>{{ $applicant->telepon }}</td>
                    <td>
                        <a href="{{ route('applicants.edit', $applicant->id) }}">Edit</a>
                        <form action="{{ route('applicants.destroy', $applicant->id) }}" method="POST" style="display:inline;">
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
