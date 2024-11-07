<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job Posting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fbfbfb;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #ffddae;
            text-align: center;
            margin-top: 30px;
            background-color: #c6e7ff;
            padding: 10px;
            border-radius: 10px;
        }

        form {
            width: 60%;
            margin: 0 auto;
            background-color: #d4f6ff;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        button {
            background-color: #ffddae;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c6e7ff;
        }
    </style>
</head>
<body>
    <h1>Edit Job Posting</h1>
    <form action="{{ route('job_postings.update', $job_posting) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul:</label>
        <input type="text" name="judul" value="{{ $job_posting->judul }}" required>

        <label>Deskripsi:</label>
        <textarea name="deskripsi" required>{{ $job_posting->deskripsi }}</textarea>

        <label>Status:</label>
        <select name="status" required>
            <option value="open" {{ $job_posting->status == 'open' ? 'selected' : '' }}>Open</option>
            <option value="closed" {{ $job_posting->status == 'closed' ? 'selected' : '' }}>Closed</option>
        </select>

        <label>Nama Perusahaan:</label>
        <input type="text" name="nama_perusahaan" value="{{ $job_posting->nama_perusahaan }}" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>
