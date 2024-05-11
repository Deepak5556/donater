<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="signup-form">
        <h2>Signup Form</h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name" required><br><br>
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>

<?php
// Include the database connection file
// Check if the form is submitted
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format, display an alert
        echo "<div id='custom-alert' class='custom-alert'>Invalid email format!</div>";
        echo "<script>document.getElementById('custom-alert').classList.add('show');</script>";
    } else {
        // Email is valid, proceed with insertion

        // Check if email already exists
        $check_stmt = $conn->prepare("SELECT COUNT(*) FROM signup WHERE email = ?");
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_stmt->bind_result($count);
        $check_stmt->fetch();
        $check_stmt->close();

        if ($count > 0) {
            // Email already exists
            echo "<div id='custom-alert' class='custom-alert'>Email already exists!</div>";
            echo "<script>document.getElementById('custom-alert').classList.add('show');</script>";
        } else {
            // Email doesn't exist, proceed with insertion
            $stmt = $conn->prepare("INSERT INTO signup (name,email,password) VALUES (?,?,?)");
            $stmt->bind_param("sss", $name, $email, $password);
            $stmt->execute();
            $stmt->close();
            header("Location:Signup.php");
            exit(); // Ensure that no code is executed after the redirection
        }
    }
}
?>
