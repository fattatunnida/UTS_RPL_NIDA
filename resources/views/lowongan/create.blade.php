<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lowongan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5EFE7; /* Light pastel background */
            color: #333;
            line-height: 1.6;
        }

        header {
            padding: 40px 20px;
            background-color: #213555; /* Dark blue for header */
            text-align: center;
            color: #F5EFE7; /* White text */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        header h1 {
            font-family: 'Roboto', sans-serif; /* Changed to Roboto */
            font-size: 3em;
            margin: 0;
            text-transform: uppercase;
        }

        .content {
            padding: 60px 20px;
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 1em;
            margin-bottom: 10px;
            font-weight: 500;
        }

        input[type="text"], textarea, select {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border: 1px solid #3E5879; /* Blue border */
            border-radius: 5px;
            margin-bottom: 20px;
            background-color: #fff; /* White background for form inputs */
        }

        input[type="text"]:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #A64D79; /* Soft pink focus border */
            box-shadow: 0 0 5px rgba(197, 208, 200, 0.8);
        }

        .actions {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .actions button, .actions a {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1em;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            text-align: center;
        }

        .actions button {
            background-color: #3E5879; /* Blue for save button */
            color: #fff;
        }

        .actions a {
            background-color: #E74C3C; /* Red for cancel button */
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tambah Lowongan Pekerjaan</h1>
    </header>

    <div class="content">
        <form action="{{ route('lowongan.store') }}" method="POST">
            @csrf
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required>

            <label for="deskripsi">Deskripsi:</label>
            <textarea id="deskripsi" name="deskripsi" rows="5" required></textarea>

            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="aktif">Aktif</option>
                <option value="nonaktif">Nonaktif</option>
            </select>

            <div class="actions">
                <a href="{{ route('lowongan.index') }}">Batal</a>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>
