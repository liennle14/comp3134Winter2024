<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending Info to App 2</title>
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
            $content = $_GET['q'];
            $content = strip_tags($content); 
            //$content = htmlentities($content);
            echo "<p>Content: $content</p>";
        }
        ?>
    </div>
</body>
</html>
