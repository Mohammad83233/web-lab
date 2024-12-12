<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pincode = $_POST['pincode'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (first_name, last_name, email, mobile, pincode, password) 
            VALUES ('$firstName', '$lastName', '$email', '$mobile', '$pincode', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful! <a href='login.php'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<form method="post">
    <h2>Register</h2>
    <input type="text" name="firstName" placeholder="First Name" required><br>
    <input type="text" name="lastName" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="mobile" placeholder="Mobile Number" required><br>
    <input type="text" name="pincode" placeholder="Pincode" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
    <a href="login.php" class="redirect-button">Go to Login</a>
    <a href="index.php" class="redirectto-button">&#8962;</a>


</form>
