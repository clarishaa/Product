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
            <div class="col-md-10 text-center">
                <h1 class="text-white m-2">Product Categories</h1>
                <ul class="list-unstyled mt-3">
                    <?php foreach ($table_category as $category): ?>
                        <li>
                            <a href="/categories/<?= $category['id'] ?>">
                                <?= $category['ProductCategory'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="/addcat/" class="btn btn-primary mt-3">Add Category</a>
            </div>

        </div>
    </div>
</body>

</html>