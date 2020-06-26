<!-- (CONNECTION TO DATABASE) -->
<?php

require '../partials/_connection.php';



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>contact</title>
</head>

<body>
    <!-- (NAVBAR) -->
    <?php
        $page = 'contact';
        require '../partials/_navbar.php';
    ?>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `contact` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$desc', current_timestamp());";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }

}

?>
<div class="container my-3">
   <h3>Contact Us</h3>
    <form action="../pages/contact.php" method="post">
     <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name='name' placeholder="Enter Your Name">
  </div>
  <div class="form-group">
    <label for="name">Email</label>
    <input type="email" class="form-control" id="email" name='email' placeholder="Enter Your Email">
  </div>

    <div class="form-group">
    <label for="name">Phone</label>
    <input type="tel" class="form-control" id="phone" name='phone' placeholder="Enter Your Phone Number">
  </div>


   <div class="form-group">
    <label for="desc">How May We Help You?</label>
    <textarea class="form-control" id="desc" name='desc' rows="3"></textarea>
  </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>


    </form>

</div>
