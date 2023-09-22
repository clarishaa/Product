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
                <h1 class="text-white text-center m-2">Add Category</h1>

                <form action="/saveCat" method="post" class="col-lg mb-3">
                    <div class="mb-3">
                        <label for="ProductCategory" class="fw-bold mb-1">Product Category</label>
                        <input type="text" id="ProductCategory" name="ProductCategory"
                            class="form-control bg-dark text-white" placeholder="Product Category">
                    </div>
                    <input type="submit" value="Save" class="btn btn-primary float-end mb-2"></input>
                </form>
            </div>
        </div>
    </div>
</body>

</html>