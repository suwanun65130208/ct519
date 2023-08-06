<!DOCTYPE html>
<html>
<head>
    <title>MyBooks</title>
         <!-- basic -->
         <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CT519</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>

<?php
// Database connection details
$servername = "db";
$username = "suwanun";
$password = "suwanun";
$database="mybooksuwanun";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to escape user input to prevent SQL injection
function clean_input($data)
{
    global $conn;
    return $conn->real_escape_string($data);
}

// CREATE operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create"])) {
    $namebook = clean_input($_POST["namebook"]);
    $typebook = clean_input($_POST["typebook"]);
    $comment = clean_input($_POST["comment"]);

    $sql = "INSERT INTO books (namebook, typebook, comment) VALUES ('$namebook', '$typebook', '$comment')";

    if ($conn->query($sql) === true) {
        echo "Record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// UPDATE operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = clean_input($_POST["id"]);
    $namebook = clean_input($_POST["namebook"]);
    $typebook = clean_input($_POST["typebook"]);
    $comment = clean_input($_POST["comment"]);

    $sql = "UPDATE books SET namebook='$namebook', typebook='$typebook', comment='$comment' WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// DELETE operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $id = clean_input($_POST["id"]);

    $sql = "DELETE FROM books WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// READ operation - Fetch all records from the "books" table
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>
<!-- header section start -->
<div class="header_section">
         <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="logo" href="index.php"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="research.php">Research</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="mybook.php">My Book</a>
                     </li>
                  </ul>
                  <div class="search_icon"><a href="#"><img src="images/search-icon.png"></a></div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">My Books</h1>
         </div>
         <div class="contact_section_2 layout_padding">
            <div class="container">
               <div class="mail_section">
                  <div class="row">

<form method="post">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Create New Book</label>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Name:</label>
  <input type="text" class="form-control" name="namebook" required><br>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Type:</label>
  <input type="text" class="form-control" name="typebook" required><br>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"> Comment:</label>
  <input type="text" class="form-control" name="comment"><br>
</div>
<div class="mb-3">
<input type="submit" name="create" value="Create">
</div>
    
</form>

<table class="table table-bordered">
<thead>
        <tr>
    <th colspan="5">Book List</th>
</tr>
</thead>
      <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Comment</th>
            <th>Action</th>
            </tr>
      </thead>
      <tbody>
      <?php // Check if data was fetched successfully
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <th scope="row"><?php echo $row['id'] ?></th>
          <td><?php echo $row["namebook"] ?></td>
          <td><?php echo $row["typebook"] ?></td>
          <td><?php echo $row["comment"] ?></td>
          <td>
        <?php
echo "<form method='post'>";
        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
        echo "<input type='hidden' name='namebook' value='" . $row["namebook"] . "'>";
        echo "<input type='hidden' name='typebook' value='" . $row["typebook"] . "'>";
        echo "<input type='hidden' name='comment' value='" . $row["comment"] . "'>";
        echo "<input type='submit' name='update' value='Update'>";
        echo "<input type='submit' name='delete' value='Delete'>";
        echo "</form>"; ?>
          </td>
        </tr>
       <?php
    }
}
?>


                </table>
                </div>
            </div>
         </div>
      </div>
<?php
// Close the database connection
$conn->close();
?>
<!-- footer section start -->
<div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/map-icon.png" class="image_main"><span class="padding_left_10">Bangbuathong Nonthaburi</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/call-icon.png" class="image_main"><span class="padding_left_10">(+66 11439638)</span></a></div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="map_text"><a href="#"><img src="images/mail-icon.png" class="image_main"><span class="padding_left_10">65130208@dpu.ac.th</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <!-- <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p> -->
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>






