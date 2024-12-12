<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <?php
        include 'db.php';

        if (!isset($_COOKIE['student_email'])) {
            header("Location: login.php");
            exit();
        }

        $email = $_COOKIE['student_email'];
        $sql = "SELECT * FROM students WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $student = $result->fetch_assoc();
            echo "<h2>Welcome, " . htmlspecialchars($student['first_name']) . " " . htmlspecialchars($student['last_name']) . "!</h2>";
            echo "<p>Email: " . htmlspecialchars($student['email']) . "</p>";
            echo "<p>Mobile: " . htmlspecialchars($student['mobile']) . "</p>";
            echo "<p>Pincode: " . htmlspecialchars($student['pincode']) . "</p>";
        } else {
            echo "Error fetching student details.";
        }
        ?>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
