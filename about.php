<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Contact form</title>
</head>
<body>
    <?php require_once "./blocks/header.php" ?>
    <div class="container mt-5"> <!--container -> это фундаментальный строительный блок Bootstrap(google) -->
        <h3>Contact form</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
    </div>
    <?php require_once "./blocks/footer.php" ?>
</body>
</html>