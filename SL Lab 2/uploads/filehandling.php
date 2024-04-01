<?php
// File path
$filename = "prem.txt";

// Open a file for writing
$file = fopen($filename, "w") or die("Unable to open file!");

// Write some text to the file
$text = "Hello, I am Prem Kathayat.";
fwrite($file, $text);

// Close the file
fclose($file);

// Open the file for reading
$file = fopen($filename, "r") or die("Unable to open file!");

// Read and output the contents of the file
echo "Contents of $filename:<br>";
while (!feof($file)) {
    echo fgets($file) . "<br>";
}

// Close the file
fclose($file);
?>
