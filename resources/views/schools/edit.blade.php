<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit School</title>
</head>
<body>

    <form action="{{ url('school/update/'.$school->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="school" value="{{ $school->school }}" required>
        <input type="text" name="address" value="{{ $school->address }}" required>
        <button type="submit">Update</button>
    </form>

</body>
</html>
