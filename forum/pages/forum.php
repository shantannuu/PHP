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
    
    
    <!-- (SLIDER) -->
    <?php

        require '../partials/_slider.php';
    ?>
    <div class="container my-2">
    <h3 class="text-center">CATEGORIES</h3>
    <div class="row">
<?php 
    $sql = "SELECT * FROM `category`";
    $db = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($db)){
        $id = $row['category_id'];
        echo '
        
            <div class="col-md-4 my-3 ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../partials/python.jpg" alt="Card image cap" width="500" height="200">
                    <div class="card-body">
                        <h5 class="card-title"><a href="../pages/treadlist.php?catid='. $id .'">'. $row['category_name'] .'</a> <span class="badge badge-primary">'. $row['created'] . ' ago</span></h5>
                        <p class="card-text">'. substr($row['category_description'],0,200) .'...</p>
                        <a href="../pages/treadlist.php?catid='. $id .'" class="btn btn-primary">Go To Page</a>
                    </div>
                </div>
            </div>
           
       ';
    }
    
?>
</div>
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