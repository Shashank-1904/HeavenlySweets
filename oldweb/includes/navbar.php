<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="index.html">
                <figure class="logo mb-0"><img src="../assets/images/logo.png" alt="image" class="img-fluid"></figure>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./../Home/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pages </a>
                        <div class="dropdown-menu drop-down-content">
                            <ul class="list-unstyled drop-down-pages">
                                <li class="nav-item"><a class="dropdown-item nav-link" href="team.html">Team</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="review.html">Review</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="shop1.html">Shop 1</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="shop2.html">Shop 2</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="shop3.html">Shop 3</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="single-product1.html">Single Product 1</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="single-product2.html">Single Product 2</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="single-product3.html">Single Product 3</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="cart.html">Cart</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="checkout.html">Checkout</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="special-offer.html">Special Offers</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="404.html">404</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="coming-soon.html">Coming Soon</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="privacy-policy.html">Privacy Policy</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="terms-of-conditions.html">Terms & Conditions</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="thank-you.html">Thank You</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Blog </a>
                        <div class="dropdown-menu drop-down-content">
                            <ul class="list-unstyled drop-down-pages">
                                <li class="nav-item"><a class="dropdown-item nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="single-blog.html">Single Blog</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="load-more.html">Load More</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="one-column.html">One Column</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="two-column.html">Two Column</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="three-column.html">Three Column</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="three-colum-sidbar.html">Three Column Sidebar</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="four-column.html">Four Column</a></li>
                                <li class="nav-item"><a class="dropdown-item nav-link" href="six-colum-full-wide.html">Six Column</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
                <div class="last_list">
                    <a class="text-decoration-none cart icon position-relative" href="shop1.html"><img src="../assets/images/header-cart.png" alt="image" class="img-fluid"><span>0</span></a>
                    <?php
                    if (isset($_SESSION['useremail'])) {
                    ?>
                        <div class="dropdown">
                            <a class="btn btn-light dropdown-toggle text-decoration-none contact_us" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?> <i class="fa-solid fa-user"></i>
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="profile.html">
                                        <i class="fa-solid fa-user-circle"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="./../handler/logout_handle.php">
                                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>

                    <?php
                    } else {
                    ?>
                        <a class="text-decoration-none contact_us" href="./../Home/login.php">login<i class="fa-solid fa-user"></i></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Search Form -->
<div id="search" class="">
    <span class="close">X</span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Type to Search">
    </form>
</div>