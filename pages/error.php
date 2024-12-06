<?php
$error_msg = isset($_GET['msg']) ? $_GET['msg'] : 'An error occurred.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="error-page">
        <h2>Error</h2>
        <p><?php echo htmlspecialchars($error_msg); ?></p>
        <a href="index.php">Return to Home</a>
    </div>
</body>
</html>