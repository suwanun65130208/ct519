<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $namebook = $_POST["namebook"];
   $typebook = $_POST["typebook"];
   $comment = $_POST["comment"];

   // Validate and sanitize the data (you can add more validation if needed)

   // Connect to the database
   $dbHost = "mariadb"; // Replace with your database host
   $dbUser = "suwanun"; // Replace with your database username
   $dbPass = "suwanun"; // Replace with your database password
   $dbName = "mybooksuwanun"; // Replace with your database name

   $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   // Insert data into the database
   $sql = "INSERT INTO books (namebook, typebook, comment) VALUES ('$namebook', '$typebook', '$comment')";

   if ($conn->query($sql) === TRUE) {
      echo "Data inserted successfully!";
   } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }

   // Close the database connection
   $conn->close();
}
?>
