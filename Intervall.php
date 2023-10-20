<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glückliche Zahlen Generator-Intervall</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body class="intervallBody">
    <h1>Glückliche Zahlen Generator</h1>
    <form action="luckyNumber.php" method="post" class="myForm">
        <label for="start">Von :</label>
        <input type="number" name="start" id="start" min=1 required>
        <label for="end">Bis :</label>
        <input type="number" name="end" id="end" min=1 required>
        <input class="btnGenerate" type="submit" value="Generate">
    </form>
    <?php include 'footer.php'; ?>
</body>

</html>
