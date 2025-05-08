<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        h2 {
            color: #333;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        form {
            display: inline;
        }

        button {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 3px;
        }

        button:hover {
            background-color: #c82333;
        }

        .edit-link {
            color: #28a745;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <h2>Students List</h2>
    <a href="{{ route('student.create') }}">+ Add New Student</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->class ? $student->class->name : 'N/A' }}</td>
                <td>
                    <a class="edit-link" href="{{ route('student.edit', $student->id) }}">Edit</a>
                    <form action="{{ route('student.delete', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
