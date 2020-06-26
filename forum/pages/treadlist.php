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

    <title>Iforum-python</title>
</head>

<body>
    <!-- (NAVBAR) -->
    <?php
        $page = 'home';
        require '../partials/_navbar.php';
    ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `category` WHERE `category_id`='$id'";
    $result = mysqli_query($conn,$sql);
    $noresult = true;
    while($row = mysqli_fetch_assoc($result)){
        
    echo '<div class="container my-2">
        <div class="jumbotron">
            <h1 class="display-4">WELCOME TO '. $row['category_name'] .' FORUM</h1>
            <p class="lead">This is the forum where you get all the information and queries about '. strtolower($row['category_name']) .'.</p>
            <hr class="my-4">
            <p>'. $row['category_description'] . '</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="../pages/about.php" role="button">more about Rules..</a>
            </p>
        </div>
        </div>';
    }
?>
<?php
$method =$_SERVER['REQUEST_METHOD'];
if ( $method == 'POST'){
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $uno = $_POST['uno'];
$sql = "INSERT INTO `thread` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `time`) VALUES ('$title', '$desc', '$id', '$uno', current_timestamp());";
$result = mysqli_query($conn,$sql);
if($result){
    $success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Hola !</strong> Your problem is submitted to the page.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  ';
  echo $success;
}
}
?>
  
<div class="container my-2">

<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
        echo '<h3 class="text-center">Start Discussion</h3>
        <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
        <input type="hidden" name="uno" value="'. $_SESSION['id'] .'">
  <div class="form-group">
    <label for="title">Problem Title :</label>
    <input type="title" class="form-control" id="title" name="title">
    <small id="emaititle" class="form-text text-muted">Please choose your problem short and sweet..!</small>
  </div>
  <div class="form-group">
    <label for="desc">Elaborate your problem :</label>
    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>';
}else{
    echo '<h5 class="bg-light lead">You are not logged in. Please Login To Start Discussion below...</h5>';
}
?>


<h3 class="text-center my-4">Browse Questions.?</h3>
<?php
$id = $_GET['catid'];

$sql="SELECT * FROM `thread` WHERE `thread_cat_id`='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    $noresult = false;
    $id = $row['thread_id'];
    $user_id = $row['thread_user_id'];
    $sql2 = "SELECT username FROM `users` WHERE `uno`='$user_id'";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);
    
    echo '
    
            
            <div class="media my-4">
        <img class="mr-3" src="../partials/kissclipart-user-icon-png-clipart-user-profile-computer-icons-42f443799b52f010.png" alt="Generic placeholder image" width="50px" height="50px">
        <div class="media-body">
        
            <h5 class="mt-0"><a href="../pages/thread.php?threadid='.$id.'">'. $row['thread_title'] .'</a></h5>
            
            <h6 class="mt-0">by '. $row2['username']. '<span class="badge badge-light "> at '. $row['time'] .'</span></h6>
            <hr>
            <p>'. $row['thread_desc'] .'</P>
        </div>
        </div>';
}
        ?>
        <?php
if($noresult){
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-5">No Result Found</h1>
      <p class="lead">Be the first person to ask a questions..</p>
    </div>
  </div>';
}

?>
        </div>
    <!-- (FOOTER) -->
    <?php

        require '../partials/_footer.php';
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>