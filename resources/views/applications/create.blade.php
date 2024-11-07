<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Application</title>
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
        form {
            width: 50%;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
        }
        input, select, button {
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #006a67;
        }
        button {
            background-color: #006a67;
            color: #fff4b7;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Tambah Application</h1>
    <form action="{{ route('applications.store') }}" method="POST">
        @csrf
        <label>Nama Applicant:</label>
        <input type="text" name="nama_applicant" required>
        
        <label>Posisi:</label>
        <input type="text" name="posisi" required>
        
        <label>Status:</label>
        <select name="status" required>
            <option value="Pending">Pending</option>
            <option value="Diterima">Diterima</option>
            <option value="Ditolak">Ditolak</option>
        </select>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
