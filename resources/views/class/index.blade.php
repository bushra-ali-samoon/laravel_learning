<!DOCTYPE html>
<html>
<head>
    <title>Class List</title>
</head>
<body>

    <h2>List of Classes</h2>

    <table>
        <tr>
            <th>Class Name</th>
            <th>Actions</th>
        </tr>

        @foreach($classes as $class)
            <tr>
                <td>{{ $class->name }}</td>
                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('class.edit', $class->id) }}">Edit</a>
                    <a href="{{ route('student.create', $class->id) }}">Add Student</a>

                    <!-- Delete Button -->
                    <form action="{{ route('class.destroy', $class->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>
