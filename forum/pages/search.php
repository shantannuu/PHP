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

    <title>Iforum</title>
</head>

<body>
    <!-- (NAVBAR) -->
    <?php
        $page = 'home';
        
        require '../partials/_navbar.php';
    ?>
    <div class="container my-2">
    <div class="my-4 jumbotron">
    <h4>Search Results For <em>"<?php echo $_GET['search']?>"</em></h4>
    </div>
    <?php

$noresult = false;
$query = $_GET['search'];
$sql = "SELECT * FROM `thread` WHERE match (thread_title,thread_desc) against ('$query')";
    $result = mysqli_query($conn,$sql);
    $noresult = true;
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['thread_id'];
       echo ' <div class="result">
    <h3><a href="../pages/thread.php?threadid='. $id .'" class="text-dark lead">'.  $row['thread_title'] .'</a></h3>
    <hr>
    <p>'. $row['thread_desc'] .'</p>
    </div>';
    }
    if($noresult){
        echo 'No result Found';
    }
?> 
    </div>

<!-- (PAGINATION) -->
<div class="container">
    <nav aria-label="Page navigation example">
  <ul class="pagination" style="margin:5px 40%">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
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