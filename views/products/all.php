<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="main-container">


        <!--Begin Main Section-->
        <div class="list-section">
            <form action="<?= route('product/delete') ?>" method="post">
                <!--Begin Header Section-->
                <div class="container-header">
                    <h3>Product List</h3>
                    <div class="header-buttons">
                        <button class="btn btn-success" id='add' type="button">ADD</button>
                        <button class="btn btn-danger mx-4" type="submit" name="submit">MASS DELETE</button>
                    </div>
                </div>
                <hr>
                <!--End Header Section-->
                <ul>
                    <?php foreach ($products as $product) : ?>
                        <li>
                            <div class="custom-card">
                                <input type="checkbox" id="delete-checkbox" name="deleteId[]" id="check" value="<?= $product['id'] ?>">
                                <div class="content">
                                    <p><?= $product['sku'] ?></p>
                                    <p><?= $product['name'] ?></p>
                                    <p><?= $product['price'] ?></p>
                                    <p><?= $product['property'] ?>: <?= $product['specifics'] ?> <?= $product['measuring_unit'] ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </form>
        </div>
        <!--End Main Section-->

        <!--Begin Footer Section-->
        <?php include __DIR__ . '/../includes/footer.php' ?>
        <!--End Footer Section-->
    </div>
    <script src="/resources/js/list.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>