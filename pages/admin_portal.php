<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: error.php?msg=Unauthorized access');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD Portal</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="portal-page">
        <h2>Welcome HOD</h2>
        <form action="hod_courses.php" method="post">
            <label for="section">Select Class Section:</label>
            <select name="section" id="section">
                <option value="TYA">TY A</option>
                <option value="TYB">TY B</option>
                <option value="TYC">TY C</option>
            </select>
            <button type="submit">View Courses</button>
        </form>
    </div>
</body>
</html>