<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Applicant</title>
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
        input, button {
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
    <h1>Edit Applicant</h1>
    <form action="{{ route('applicants.update', $applicant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $applicant->nama }}" required>
        
        <label>Email:</label>
        <input type="email" name="email" value="{{ $applicant->email }}" required>
        
        <label>No. Telepon:</label>
        <input type="text" name="telepon" value="{{ $applicant->telepon }}" required>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
