<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('todos.update', $todo->id) }}">
        @csrf
        @method('PUT')

        <input type="text" name="task" value="{{ $todo->task }}" required><br><br>

        <label>
            <input type="checkbox" name="is_completed" {{ $todo->is_completed ? 'checked' : '' }}>
            Completed
        </label><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('todos.index') }}">Back to list</a>
</body>
</html>
