<nav class="navbar navbar-expand-lg navbar-light  bg-transparent">
    <div class="container-fluid">
        <a class="navbar-brand position-absolute top-50 start-50 translate-middle maintitle" href="<?= URLROOT ?>"><b>L'ART L'BELDI</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= URLROOT ?>">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= URLROOT ?>artworkController/artworks">Artworks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?= URLROOT ?>artistContorller/artists">Artists</a>
                </li>
              

            </ul>
            <form class="d-flex" role="search">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php if (!empty($_SESSION['user_id'])) : ?>

                        <li><a class="nav-link" href="<?= URLROOT ?>userController/confirmLogout">Log out</a></li>
                    <?php else : ?>

                        <li><a class="nav-link me-md-4 mb-md-0 mb-2" href="<?= URLROOT ?>usercontroller/login">Login</a></li>
                        <li><a class="nav-link text-primary" href="<?= URLROOT ?>usercontroller/register">Register</a></li>
                    <?php endif; ?>
                </ul>
            </form>
        </div>
    </div>
</nav>