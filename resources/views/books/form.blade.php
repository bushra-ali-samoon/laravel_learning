<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Document</title>
</head>
<body>
         <h2>book name</h2>
         <form action="savebooks" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter Book Title">
    <input type="text" name="author" placeholder="Enter Author Name">
    <input type="text" name="genre" placeholder="Enter Genre">  
    <button type="submit">Submit</button>
</form>

</form>

</html>