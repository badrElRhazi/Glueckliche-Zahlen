<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glückliche Zahlen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="luckNbr">
<?php
if (isset($_POST['start']) && isset($_POST['end'])) {
    $start = (int)$_POST['start'];
    $end = (int)$_POST['end'];

    function isLuckyNumber($number) {
        $sequence = [];
        while (!in_array($number, $sequence) && $number != 1) {
            $sequence[] = $number;
            $sum = 0;
            $digits = str_split($number);
            foreach ($digits as $digit) {
                $sum += $digit * $digit;
            }
            $number = $sum;
        }
        return $number == 1;
    }

    function findLuckyNumbers($start, $end) {
        $luckyNumbers = [];
        $number = $start;
        while ($number <= $end) {
            if (isLuckyNumber($number)) {
                $luckyNumbers[] = $number;
            }
            $number++;
        }
        return $luckyNumbers;
    }

    $luckyNumbers = findLuckyNumbers($start, $end);
    echo "Die glücklichen Zahlen von $start bis $end sind: " . implode(', ', $luckyNumbers);
}
?>
</body>
<?php include 'footer.php'; ?>
</html>
