<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $namebook = $_POST["namebook"];
   $typebook = $_POST["typebook"];
   $comment = $_POST["comment"];

   // Validate and sanitize the data (you can add more validation if needed)
   
   

   $servername = "mariadb";
   $username = "root";
   $password = "";
   $database="mybooksuwanun";
   // Create connection
   $conn = new mysqli($servername, $username, $password,$database);
   
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   // Set character set to utf8mb4
   if (!$conn->set_charset("utf8mb4")) {
     die("Error setting character set: " . $conn->error);
   }   

   // Close the database connection
   $conn->close();
}
?>
