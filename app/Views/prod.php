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
                <form action="/save" method="post" class="col-lg mb-3">
                    <div class="mb-3">
                        <input type="hidden" id="id" name="id" >
                        <label for="ProductName" class="fw-bold mb-1">Product Name</label>
                        <input type="text" id="ProductName" name="ProductName" 
                            class="form-control bg-dark text-white" placeholder="Product Name">

                    </div>
                    <div class="mb-3">
                        <label for="ProductDescription" class="fw-bold mb-1">Product Description</label>
                        <input type="text" id="ProductDescription" name="ProductDescription"
                             class="form-control bg-dark text-white"
                            placeholder="Product Description">
                    </div>
                    <div class="mb-3">
                        <label for="ProductCategory" class="fw-bold mb-1">Product Category</label>
                        <select id="ProductCategoryID" name="ProductCategoryID" class="form-control bg-dark text-white">
                            <?php foreach ($table_category as $category) : ?>
                                <option value="<?= $category['id'] ?>" >
                                    <?= $category['ProductCategory'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="ProductQuantity" class="fw-bold mb-1">Product Quantity</label>
                        <input type="number" id="ProductQuantity" name="ProductQuantity"
                             class="form-control bg-dark text-white"
                            placeholder="ProductQuantity">
                    </div>
                    <div class="mb-3">
                        <label for="ProductPrice" class="fw-bold mb-1">ProductPrice</label>
                        <input type="number" id="ProductPrice" name="ProductPrice" 
                            class="form-control bg-dark text-white" placeholder="ProductPrice">
                    </div>
                    <input type="submit" value="save" class="btn btn-primary float-end mb-2"></input>
                </form>
            </div>
        </div>
    </div>
</body>

</html>