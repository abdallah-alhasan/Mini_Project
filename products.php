<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $qty = $_POST["qty"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    setcookie('"' . str_replace(" ", "", $name) . '"' , "<div class=\"row p-2 bg-white border rounded\">
    <div class=\"col-md-3 mt-1\"><img class=\"img-fluid img-responsive rounded product-image\" src=\"https://images.pexels.com/photos/2783873/pexels-photo-2783873.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940\"></div>
    <div class=\"col-md-6 mt-1\">
        <h5>$name</h5>
        <div class=\"mt-1 mb-1 spec-1\">Quantity: <span>$qty</span></div>
        <p class=\"text-justify para mb-0\">$description<br><br></p>
        <h4 class=\"mr-1\">$$price</h4>
    </div>
    </div>" ,  time() + 3600 , "/");
    header("Refresh:0");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
       <!-- Start Navabar-->
       <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
          AA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="main">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-6" aria-current="page" href="index.php">Add New</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-6" href="#">Products</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    <div class="seperatior" style="height: 50px;"></div>
    <!-- End Navbar -->
    <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <?php
                if(count($_COOKIE) > 0 ){
                    foreach($_COOKIE as $value){
                        echo $value;
                    }
                }else{
                    echo "<h1> No products added </h1>";
                    echo '<a href="index.php" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>';
                }
            ?> 
        </div>
    </div>
</div>
  <!-- Footer -->
  <footer class="footer">
        <div class="container">
          <span class="text-muted d-flex justify-content-center ">&copy; by Abdallah Alhasan 2022</span>
        </div>
    </footer>
    <!-- End Footer -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3509c2808e.js" crossorigin="anonymous"></script>
</body>
</html>