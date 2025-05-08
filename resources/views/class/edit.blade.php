<!DOCTYPE html>
<html>
<head>
    <title>Edit Class</title>
</head>
<body>

    <h2>Edit Class</h2>

    <form action="{{ url('class/update/' . $class->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- This is important -->

    <input type="text" name="name" value="{{ $class->name }}" required>
    <button type="submit">Update</button>
</form>


</body>
</html>
