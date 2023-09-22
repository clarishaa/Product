<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3F3 Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="text-white text-center m-2">Product Listing</h1>
                <a href="/addprod/" class="btn btn-primary mt-3">Add Product</a>
                <table class="table table-dark table-hover table-sm table-bordered text-center align-middle">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Category</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($table_products as $product): ?>
                        <tr>
                            <td>
                                <?= $product['id'] ?>
                            </td>
                            <td>
                                <?= $product['ProductName'] ?>
                            </td>
                            <td>
                                <?= $product['ProductDescription'] ?>
                            </td>

                            <?php
                            $category = '';
                            foreach ($table_category as $cat) {
                                $category=$cat;
                            }
                            ?>

                            <td>
                                <?= $category ?>
                            </td>

                            <td>
                                <?= $product['ProductQuantity'] ?>
                            </td>
                            <td>
                                <?= $product['ProductPrice'] ?>
                            </td>
                            <td><a href="/edit/<?= $product['id'] ?>" class="btn btn-danger mb-3">Edit</a></td>
                            <td><a href="/delete/<?= $product['id'] ?>" class="btn btn-success mb-3">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>