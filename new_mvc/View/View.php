<!DOCTYPE html>
<html>
<head>
    <title>View page</title>
</head>
<body>
    <center><h1><?php echo "$msg"."$name"; ?></h1></center>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
