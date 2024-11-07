<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #f5f5dc;
            color: #2e7d32;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        a {
            display: block;
            background-color: #2e7d32;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px auto;
            width: 200px;
        }
        a:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <a href="{{ route('job_postings.index') }}">Job Postings</a>
    <a href="{{ route('applicants.index') }}">Applicants</a>
    <a href="{{ route('applications.index') }}">Applications</a>
</body>
</html>
