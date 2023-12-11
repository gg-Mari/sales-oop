<?php

    session_start();
    require '../classes/Product.php';

    $product = new Product;
    $all_products = $product->getAllProducts();

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>

  <body>
    <div class="container w-100">
        <h4 class="text-secondary text-center pt-3">Welcome, <?= $_SESSION['username'] ?></h4><br>
        <div class="row">
            <h1 class="col-10">Product List</h1>
            <h1 class="col-2 text-end text-info"><a href="../views/add-product.php" data-toggle="modal"><i class="fa-solid fa-plus"></i></a></h1>
        </div>
        <form action="../actions/add-product.php">
            <table class="table mt-3">
                <thead>
                    <tr class="table-dark">
                        <td>ID</td>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td><!-- edit and delete button --></td>
                        <td><!-- buy product button --></td>
                    </tr>
                </thead>
                <tbody>
                    <?php while($products = $all_products->fetch_assoc()){ ?>
                    <tr>
                        <td><?= $products['id']; ?></td>
                        <td><?= $products['product_name'];?></td>
                        <td><?= $products['price'];?></td>
                        <td><?= $products['quantity'];?></td>
                        <td>
                            <?php
                                if($_SESSION['id'] == $products['id']){
                            ?>
                            <a href="edit-product.php" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="../actions/delete-user.php" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                            <?php } ?>
                        </td>
                        <td>     
                            <?php
                                if($_SESSION['id'] == $products['id']){
                            ?>               
                            <a href="buy-product.php" class="btn btn-success">
                            <i class="fa-solid fa-cash-register"></i></i>
                            </a>
                            <?php } ?>
                        </td>    
                    </tr>            
                    <?php } ?>
                    <?php
                        if(empty($all_products)){
                    ?>

                        <tr>
                            <td class="text-center text-danger bg-secondary" colspan="6">No Records Found</td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
    
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


