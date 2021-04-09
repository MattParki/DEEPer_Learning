<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="product-list.php">Cats</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" href="product-list.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
        <div class="navbar-nav ml-auto">
            <?php if (!empty($loggedInUser)) : ?>
                Hello, <?= $loggedInUser->name ?>
            <?php else: ?>
                <a class="nav-link" href="register.php">Register</a>
                <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
