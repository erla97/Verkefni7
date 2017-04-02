<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verkefni 7</title>
</head>
<body>
    
<?php if (isset($error)) {
 echo "<p>Error: $error</p>";
} ?>
    
<h2>Verkefni 7</h2>
    
<form action="signup.php">
    <br>
    Nafn: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="name"><br>
    Netfang:&nbsp; <input type="text" name="netfang"><br>
    Lykilorð: <input type="text" name="lykilord"><br><br>
    <input type="submit" value="Sign Up">
</form>
    <br>
    <br>
    <br>
<form action="login.php">
    <br>
    Netfang: &nbsp;<input type="text" name="netfang"><br>
    Lykilorð: <input type="text" name="lykilord"><br><br>
    <input type="submit" value="Log In">
</form>

</body>
</html>