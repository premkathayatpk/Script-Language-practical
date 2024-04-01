<!DOCTYPE html>
<html>
<head>
    <title>Date Function in PHP</title>
</head>
<body>

<h2>Current Date and Time</h2>

<?php
// Displaying current date and time in default format
echo "<p>Current Date and Time: " . date("Y-m-d H:i:s") . "</p>";

// Displaying current date in a custom format
echo "<p>Current Date: " . date("d/m/Y") . "</p>";

// Displaying current time in a custom format
echo "<p>Current Time: " . date("h:i:sa") . "</p>";

// Displaying the day of the week
echo "<p>Today is: " . date("l") . "</p>";

// Displaying current timezone
echo "<p>Timezone: " . date_default_timezone_get() . "</p>";

// Displaying date and time for a different timezone
date_default_timezone_set("America/New_York");
echo "<p>Date and Time in New York: " . date("Y-m-d H:i:s") . "</p>";
?>

</body>
</html>
