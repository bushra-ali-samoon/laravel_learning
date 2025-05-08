<!DOCTYPE html>
<html>
<head>
    <title>Add Class</title>
</head>
<body>

    <h2>Add New Class</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('class.store') }}" method="POST">    @csrf
        <input type="text" name="name" placeholder="Enter class name" required>
        <button type="submit">Save</button>
    </form>

</body>
</html>
