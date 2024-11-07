<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Postings</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5dc; /* cream */
            color: #2e7d32; /* green */
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #2e7d32;
        }
        button {
            background-color: #2e7d32; /* green */
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
        button:hover {
            background-color: #1b5e20; /* darker green */
        }
    </style>
</head>
<body>
    <h1>Job Postings</h1>
    <a href="{{ route('job_postings.create') }}"><button>Create Job Posting</button></a>
    <table>
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobPostings as $jobPosting)
                <tr>
                    <td>{{ $jobPosting->title }}</td>
                    <td>
                        <a href="{{ route('job_postings.edit', $jobPosting->id) }}"><button>Edit</button></a>
                        <form action="{{ route('job_postings.destroy', $jobPosting->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete(this)">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function confirmDelete(form) {
            if (confirm('Are you sure you want to delete this job posting?')) {
                form.submit();
            }
        }
    </script>
</body>
</html>

