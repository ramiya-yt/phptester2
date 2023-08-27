<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];

    // Open a file for appending data
    $file = fopen("user_data.txt", "a");

    if ($file) {
        // Format the data and write it to the file
        $data = "Name: $name, Age: $age\n";
        fwrite($file, $data);
        fclose($file);
        echo "Data has been successfully stored.";
    } else {
        echo "Error: Unable to open the file.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
