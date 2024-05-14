<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        h1 {
            color: #0C24DB;
            text-align: center;
            margin-top: 30px;
        }
        p {
            text-align: center;
            color: #6c757d;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            margin-top: 30px;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #0C24DB;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Class</th>
                <th>Block</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
            <tr>
                <td>{{ $attendance->student->id }}</td>
                <td>{{ $attendance->student->firstName }}</td>
                <td>{{ $attendance->student->lastName }}</td>
                <td>{{ $attendance->student->class->className }}</td>
                <td>{{ $attendance->student->block->blockName }}</td>
                <td>{{ $attendance->status }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>
