<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Form</title>
</head>
<body>

<h2>Sign Up</h2>

<form method="post" action="signup.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" name="signup" value="Sign Up">
</form>

</body>
</html>
