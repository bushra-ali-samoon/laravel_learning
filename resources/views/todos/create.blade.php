<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
</head>
<body>
    <h1>Add New Task</h1>
  <form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <input type="text" name="task" placeholder="Enter Task" required>
    <button type="submit">Add</button>
</form>


    <br>
    <a href="{{ route('todos.index') }}">Back to list</a>
</body>
</html>
