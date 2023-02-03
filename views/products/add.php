<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="main-container">


        <!--Begin Form Section-->
        <form action="<?= route('product/store') ?>" method="post" id="product-form">
            <!--Begin Header Section-->
            <div class="container-header">
                <h3>Product Add</h3>
                <div class="header-buttons">
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" id="cancel">Cancel</button>
                    <!-- <a href="<?= route('product/index') ?>" id='cancel' class="btn btn-secondary">Cancel</a> -->
                </div>
            </div>
            <hr>
            <!--End Header Section-->
            <div class="mb-3 form-group">
                <!--SKU-->
                <label class="form-label" for="sku">SKU</label>
                <input type="text" class="border border-dark" required name="sku" id="sku">
            </div>
            <div class="mb-3 form-group">
                <!--Name-->
                <label class="form-label" for="name">Name</label>
                <input type="text" class="border border-dark" required name="name" id="name">
            </div>
            <div class="mb-3 form-group">
                <!--Price-->
                <label class="form-label" for="price">Price ($)</label>
                <input type="text" class="border border-dark" pattern="[0-9.]+" required name="price" id="price">
            </div>
            <div class="form-group">
                <!--Type Switcher-->
                <label class="form-label" for="productType">Type Switcher</label>
                <select required onchange="hello(this)" class="form-select form-select-sm w-25 d-inline-flex border border-dark" name="productType" id="productType">
                    <option value="" selected>Type Switcher</option>
                    <option value="DVD">DVD</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Book">Book</option>
                </select>
            </div>
            <!--Begin DVD Section-->
            <div id="DVD" class="form-group">
                <h5 class="info">*Please provide DVD size</h5>
                <!--DVD Size-->
                <label class="form-label" for="size">Size (MB)</label>
                <input type="text" pattern="[0-9.]+" class="border border-dark" name="size" id="size">
            </div>

            <!--End DVD Section-->

            <!--Begin Furniture Section-->
            <div id="Furniture">
                <h5 class="info">*Please provide furniture dimentions</h5>
                <div class="mb-3 form-group">
                    <!--Furniture Height-->
                    <label class="form-label" for="height">Height (CM)</label>
                    <input type="text" pattern="[0-9.]+" oninvalid="setCustomValidity('Only Numbers are allowed')" oninput="setCustomValidity('')" class="border border-dark" name="height" id="height">
                </div>
                <div class="mb-3 form-group">

                    <!--Furniture Height-->
                    <label class="form-label" for="width">Width (CM)</label>
                    <input type="text" pattern="[0-9.]+" class="border border-dark" name="width" id="width">
                </div>

                <div class="mb-3 form-group">
                    <!--Furniture Length-->
                    <label class="form-label" for="length">Length (CM)</label>
                    <input type="text" pattern="[0-9.]+" class="border border-dark" name="length" id="length">
                </div>
            </div>
            <!--End Furniture Section-->

            <!--Begin Book Section-->
            <div id="Book" class="form-group">
                <!--Furniture Weight-->
                <h5 class="info">*Please provide book weight</h5>
                <label class="form-label" for="weight">Weight (KG)</label>
                <input type="text" pattern="[0-9.]+" name="weight" id="weight">
            </div>
            <!--End Book Section-->

        </form>

        <!--End Form Section-->

        <!--Begin Footer Section-->
        <?php include __DIR__ . '/../includes/footer.php' ?>
        <!--End Footer Section-->
    </div>

    <!-- <script>
        const dvd = document.getElementById('DVD');
        const DVDoption = document.getElementById('choose-dvd');
        const btn = document.getElementsByClassName('btn-1');



        function showDVD() {
            dvd.style.display = 'block';
            furniture.style.display = 'none';
            book.style.display = 'none';
        }
    </script> -->

    <script src="/resources/js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>