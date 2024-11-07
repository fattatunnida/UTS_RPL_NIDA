<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Posting</title>
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

        form {
            width: 60%;
            margin: 0 auto;
            background-color: #FFF4B7;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            color: #000B58;
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
            border: 1px solid #003161;
            font-size: 16px;
        }

        button {
            background-color: #006A67;
            color: #FFF4B7;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #003161;
        }
    </style>
</head>
<body>
    <h1>Create Job Posting</h1>
    <form action="{{ route('job_postings.store') }}" method="POST">
        @csrf
        <label>Judul:</label>
        <input type="text" name="judul" required>

        <label>Deskripsi:</label>
        <textarea name="deskripsi" required></textarea>

        <label>Status:</label>
        <select name="status" required>
            <option value="open">Open</option>
            <option value="closed">Closed</option>
        </select>

        <label>Nama Perusahaan:</label>
        <input type="text" name="nama_perusahaan" required>

        <button type="submit">Create</button>
    </form>
</body>
</html>
