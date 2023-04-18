<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-transparent">
    <div class="container-fluid">


        <a class="navbar-brand position-absolute top-50 start-50 translate-middle maintitle" href="<?= URLROOT ?>"><b>L'ART L'BELDI</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent ">



            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= URLROOT ?>">Shop</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT ?> ">Subjcts</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT ?> ">Best Sillers</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT ?> ">Customer Service</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URLROOT ?> ">Our WebSite</a>

                </li>

            </ul>

            <form class="d-flex" role="search">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <?php if (!empty($_SESSION['user_id'])) : ?>
                        <span class="material-symbols-outlined"  href="<?= URLROOT?>">
                            shopping_cart
                        </span>
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





<!-- end navbar -->

<!--
                                    <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="text-decoration: none;">Menu <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-level">

                                        <li><a href="#">Level 1</a></li>

                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Level 1</a> -->

<!-- Level 2 -->
<!-- <ul class="dropdown-menu">
                                                <li><a href="#">Level 2</a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li> -->