<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Info to App 1</title>
</head>
<body>
    <h1>Input Form</h1>
    <form method="get">
        <input name="q" placeholder="Enter Text">
        <br/>
        <input type="submit" value="Go">
    </form>

    <div>
        <?php
        if (isset($_GET['q'])) {
            echo "<p>Content: {$_GET['q']}</p>";
        }
        ?>
    </div>
</body>
</html>
