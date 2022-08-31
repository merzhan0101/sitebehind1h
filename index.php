<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<?php require_once "./blocks/header.php" ?>

<div class="d-flex flex-wrap mt-4"> <!--mt and mb -> это отступы -->
    <?php for($i = 0; $i < 3 ; $i++): ?>
        <!-- blocks/средн панель -->
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="mb-5">Продукт</h4>
        </div>
        <div class="card-body">
            <img src="/assets/img/<?php echo($i + 1) ?>.jpg" class="img-thumbnail">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Подробнее</button>
        </div>
    </div>
    </div>
    <?php endfor; ?> <!--function for with php start and end codes -->
</div>
</div>


<?php require_once "./blocks/footer.php" ?>
</body>
</html>