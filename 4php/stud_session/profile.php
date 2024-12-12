<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="profile-container">
    <h1>Session..!!</h1>
        <?php
        session_start();
        include 'db.php';

        if (!isset($_SESSION['student_id'])) {
            header("Location: login.php");
            exit();
        }

        $student_id = $_SESSION['student_id'];
        $sql = "SELECT * FROM students WHERE id='$student_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $student = $result->fetch_assoc();
            echo "<h2>Welcome, " . $student['first_name'] . " " . $student['last_name'] . "!</h2>";
            echo "<p>Email: " . $student['email'] . "</p>";
            echo "<p>Mobile: " . $student['mobile'] . "</p>";
            echo "<p>Pincode: " . $student['pincode'] . "</p>";
           
        } else {
            echo "Error fetching student details.";
        }
        ?>
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>
