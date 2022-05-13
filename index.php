<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    foreach($_COOKIE as $key => $value){
        if (isset($_COOKIE[$key])) {
            unset($_COOKIE[$key]); 
            setcookie($key, null, -1, '/'); 
            header("Refresh:0");
            return true;
        } else {
            return false;
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <style>
        .display{
            width: 500px;
        }
    @media screen and (max-width:450px) {
        .display{
            display: none !important;
        }
    }
    </style>
  </head>
  
  <body>
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
                <a class="nav-link p-2 p-lg-6" aria-current="page" href="#add">Add New</a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-2 p-lg-6" href="products.php">Products</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- end of nav -->
    <!-- End Navbar -->
    <div class="container">
        <div class="card border-danger" id="add">
            <div class="card-header bg-danger text-white">
                <strong><i class="fa fa-plus"></i> Add New Product</strong>
            </div>
            <div class="card-body">
                <form action="products.php" method="POST" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="qty" class="col-form-label">Qty</label>
                            <input type="number" class="form-control" name="qty" id="qty" placeholder="Qty" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Image URL">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Description</label>
                        <textarea name="description" id="" rows="5" class="form-control" placeholder="Description"></textarea><br>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Save</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
        <!-- Table Product -->
        <div class="card border-danger" id="products">
            <div class="card-header bg-danger text-white">
            <strong><i class="fa fa-database"></i> Products</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title float-left">Table Products</h5>
                    <a href="#" class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <table class="table table-bordered table-striped col-md">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class = "display">Product Details</th>
                        <th>Key Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                if(count($_COOKIE) > 0){
                    $i = 1;
                    foreach($_COOKIE as $key => $value){
                        echo "<tbody>
                        <tr>
                            <td>$i</td>
                            <td class ='display' >$value</td>
                            <td>$key</td>
                            <td>
                                <form action='index.php' method = 'POST'>
                                    <div class=\"form-row\">
                                        <div class=\"form-group col-md\">
                                            <input type=\"submit\" class=\"form-control btn btn-sm btn-danger\" id=\"delete$i\" value=\"delete\" name=\"delete$i\"  required>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>";
                    $i++;
                    }
                }else{
                    echo "<h1> No products added </h1>";
                }
                ?>
            </table>
        </div>
      </div>
      <!-- End Table Product -->
      <br>

      
        <br>
    </div><!-- /.container -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
          <span class="text-muted d-flex justify-content-center ">&copy; by Abdallah Alhasan 2022</span>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/3509c2808e.js" crossorigin="anonymous"></script>
</body>
</html>