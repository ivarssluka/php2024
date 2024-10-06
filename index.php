<?php

/* Control structures ( if, else, elseif, else if ) */

$score = 95;

if ($score >= 90) {
    echo "A";
    if ($score >= 95) {
        echo "+";
    }
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "F";
}

echo '<br>';
$score = 50;

if ($score >= 90) {
    echo "A";
} else if ($score >= 80) {
    echo "B";
} else if ($score >= 70) {
    echo "C";
} else if ($score >= 60) {
    echo "D";
} else {
    echo "F";
}
echo '<br>';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control structures</title>
</head>
<body>
<!-- Control structures alternative syntax embedded in HTML -->
<?php $score = 95 ?>

<?php if ($score >= 90): ?>
    <strong>A</strong>
<?php elseif ($score >= 80): ?>
    <strong>B</strong>
<?php elseif ($score >= 70): ?>
    <strong>C</strong>
<?php elseif ($score >= 60): ?>
    <strong>D</strong>
<?php else: ?>
    <strong>F</strong>
<?php endif; ?>
</body>
</html>
