<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Postings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000B58;
            color: #FFF4B7;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #FFF4B7;
            text-align: center;
            margin-top: 30px;
            background-color: #003161;
            padding: 10px;
            border-radius: 10px;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #FFF4B7;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            color: #000B58;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #003161;
            text-align: center;
        }

        th {
            background-color: #006A67;
            color: #FFF4B7;
        }

        tr:nth-child(even) {
            background-color: #e0f7fa;
        }

        tr:hover {
            background-color: #b3e5fc;
        }

        .btn {
            background-color: #006A67;
            padding: 5px 10px;
            color: #FFF4B7;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #003161;
        }

        .btn-danger {
            background-color: #b71c1c;
            color: #FFF4B7;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: #7f0000;
        }
    </style>
</head>
<body>
    <h1>Job Postings</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <p style="text-align:center; color:#006A67;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($job_postings as $job_posting)
                <tr>
                    <td>{{ $job_posting->judul }}</td>
                    <td>{{ Str::limit($job_posting->deskripsi, 50) }}</td>
                    <td>{{ $job_posting->status }}</td>
                    <td>
                        <a href="{{ route('job_postings.edit', $job_posting) }}" class="btn">Edit</a>
                        <form action="{{ route('job_postings.destroy', $job_posting) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="text-align:center; margin-top: 20px;">
        <a href="{{ route('job_postings.create') }}" class="btn">Create New Job Posting</a>
    </div>
</body>
</html>
