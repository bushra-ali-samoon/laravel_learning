<!DOCTYPE html>
<html>
<head>
    <title>Schools List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #eee;
        }
        .action-buttons a, .action-buttons form {
            display: inline-block;
            margin-right: 5px;
        }
        .action-buttons form {
            margin: 0;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">School Records</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>School Name</th>
                <th>Address</th>
                <th>Actions</th> <!-- New column -->
            </tr>
        </thead>
        <tbody>
            @forelse ($schools as $school)
                <tr>
                    <td>{{ $school->id }}</td>
                    <td>{{ $school->school }}</td>
                    <td>{{ $school->address }}</td>
                    <td class="action-buttons">
                        <!-- Edit Button Link -->
                        <a href="{{ url('school/edit/'.$school->id) }}" class="edit-button">Edit</a>
                        
                        <!-- Delete Button Form -->
                        <form action="{{ url('school/delete/'.$school->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align:center;">No data found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
