<!DOCTYPE html>
<html>
<head>
    <title>PHP Control Structures</title>
</head>
<body>

<?php
// If-Else Control Structure
$age = 25;
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

// Switch-Case Control Structure
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "It's Monday! Start of the week.<br>";
        break;
    case "Friday":
        echo "It's Friday! Almost weekend.<br>";
        break;
    default:
        echo "It's neither Monday nor Friday.<br>";
}

// While Loop Control Structure
$count = 1;
echo "Numbers using While Loop: ";
while ($count <= 5) {
    echo $count . " ";
    $count++;
}
echo "<br>";

// For Loop Control Structure
echo "Numbers using For Loop: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// Foreach Loop Control Structure
$colors = array("Red", "Green", "Blue");
echo "Colors using Foreach Loop: ";
foreach ($colors as $color) {
    echo $color . " ";
}
echo "<br>";

?>

</body>
</html>
