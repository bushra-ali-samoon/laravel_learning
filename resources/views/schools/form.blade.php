 
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>school registration</title>
</head>
<body>
<form action="save-school" method="POST">
    @csrf
    <input type="text" name="school" placeholder="Enter School Name">
    <input type="text" name="address" placeholder="Enter Address">
    <button type="submit">Submit</button>
</form>
</body>
</html>