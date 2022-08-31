<!-- header -->

<div class="container">
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
    <li><a href="/" class="nav-link px-2 link-secondary">Главная</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
    <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
    <li><a href="../about.php" class="nav-link px-2 link-dark">О нас</a></li>
    </ul>

    <div class="col-md-3 text-end">
    
    <?php 
        if($_COOKIE['user'] == 'yes'):
    ?>
    <a class="btn btn-outline-primary me-2" href="./auth.php">Личный кабинет</a>
    <!-- <button type="button" class="btn btn-primary" href="/auth.php">User cabinet</button> -->
    <?php else: ?>
    <a class="btn btn-outline-primary me-2" href="./auth.php">Войти</a>
    <?php endif; ?>
    </div>
</header>
</div>