<?php

$home = false;
$about = false;
$contact = false;
if($page == 'home'){
  $home = 'active';
}
if($page == 'about'){
  $about = 'active';
}
if($page == 'contact'){
  $contact = 'active';
}
// include '../partials/_connection.php';

session_start();





  echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <a href="../pages/forum.php"><img class="mx-4 bg-light rounded-circle" src="../partials/kissclipart-user-icon-png-clipart-user-profile-computer-icons-42f443799b52f010.png" width="50px" height="50px"></a>
  
    
  
 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item ' . $home . '">
      <a class="nav-link" href="../pages/forum.php">HOME <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item ' . $about . '">
      <a class="nav-link" href="about.php">ABOUT</a>
    </li>
    <li class="nav-item ' . $contact . '">
      <a class="nav-link" href="../pages/contact.php">CONTACT</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      CATEGORIES
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
    
    $sql = "SELECT * FROM `category`";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['category_id'];
    echo '<a class="dropdown-item" href="../pages/treadlist.php?catid='. $id .'">'. ucfirst(strtolower($row['category_name'])) .'</a>';
    }
      
    echo '</div>
  </li>
   </ul>';
   echo ' <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
   <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
   </form>';
  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
    echo '
    
    <div class="user mx-2">
    <span class="badge badge-info mx-3"> WELCOME ' . $_SESSION['username'] . '</span> 
    <a class="btn btn-outline-warning" href="logout.php" role="button">Logout</a>
    ';
  }
  else{
  echo '
  <div class="user mx-2">
  
  <a class="btn btn-outline-warning" href="#" role="button" data-toggle="modal" data-target="#signup">SignUp</a>
  
  <a class="btn btn-outline-warning" href="#" role="button" data-toggle="modal" data-target="#login">Login</a>';
  }
  echo '</div>
  
</div>
</nav>';

include "../partials/modalsignup.php";
include "../partials/modallogin.php";
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
<strong>HOLA..! </strong> Your registeration to the page is successfully done.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false"){
  echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>WARNING..! </strong>' . $_GET['error'] . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
if(isset($_GET['logout']) && $_GET['logout'] == "true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
<strong>HOLA..! </strong> Logout to the page is successfully done
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}
if(isset($_GET['login']) && $_GET['login'] == "true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
<strong>HOLA..! </strong> Login to the page is successfully done.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}
if(isset($_GET['login']) && $_GET['login'] == "false"){
  echo '<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>WARNING..! </strong> Failed to login
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
?>