<?php
include('../private/db.php');
if (isset($_SESSION['userid'])) {
    $user_id = $_SESSION['userid'];
    $query = "select * from product p join productCart pc on pc.product_id = p.product_id where pc.user_id='$user_id' AND orderReference is NULL";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Wrong Query";
    }
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!--header section start-->
<header class="gheader position-relative z-2 header-sticky">
    <div class="ghead-topbar bg-primary d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-xl-3">
                    <div class="topbar-info d-none d-xl-block">
                        <p class="text-white fs-sm fw-medium mb-0">Welcome to our Heavenly Sweets store</p>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-9">
                    <ul class="d-flex align-items-center justify-content-center justify-content-xl-end topbar-info-right">
                        <li class="nav-item">
                            <a href="mailto:groshop@support.com">
                                <span class="me-1">
                                    <svg width="16" height="14" viewBox="0 0 20 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.2422 0H1.75781C0.790547 0 0 0.783572 0 1.75V12.25C0 13.2168 0.791055 14 1.75781 14H18.2422C19.2095 14 20 13.2164 20 12.25V1.75C20 0.783339 19.2091 0 18.2422 0ZM17.9723 1.16667C17.4039 1.73433 10.7283 8.40194 10.4541 8.67588C10.225 8.90462 9.77512 8.90478 9.54594 8.67588L2.02773 1.16667H17.9723ZM1.17188 12.0355V1.96447L6.21348 7L1.17188 12.0355ZM2.02773 12.8333L7.04078 7.82631L8.71598 9.49951C9.40246 10.1852 10.5978 10.1849 11.2841 9.49951L12.9593 7.82635L17.9723 12.8333H2.02773ZM18.8281 12.0355L13.7865 7L18.8281 1.96447V12.0355Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                heavenlysweets@support.com
                            </a>
                        </li>
                        <li class="nav-item">
                            <span class="me-1">
                                <svg width="12" height="17" viewBox="0 0 12 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.00011 8.16427C7.44543 8.16427 8.62131 6.98781 8.62131 5.54175C8.62131 4.09569 7.44543 2.91925 6.00011 2.91925C4.55478 2.91925 3.37891 4.09569 3.37891 5.54175C3.37891 6.98781 4.55478 8.16427 6.00011 8.16427ZM6.00011 3.85662C6.92883 3.85662 7.68441 4.61259 7.68441 5.54175C7.68441 6.47093 6.92886 7.2269 6.00011 7.2269C5.07136 7.2269 4.31581 6.47093 4.31581 5.54175C4.31581 4.61259 5.07139 3.85662 6.00011 3.85662Z"
                                        fill="white" stroke="white" stroke-width="0.3" />
                                    <path
                                        d="M3.14593 10.2541C3.85594 11.2159 3.57069 10.8418 5.61579 13.7635C5.80167 14.0301 6.19695 14.0314 6.38389 13.7639C8.43824 10.8284 8.15557 11.2002 8.85403 10.254C9.56155 9.29555 10.2932 8.30443 10.6941 7.14299C11.2744 5.46171 11.0236 3.79818 9.9879 2.45881C9.98787 2.45881 9.98787 2.45878 9.98784 2.45878C9.03913 1.23225 7.54834 0.5 5.99998 0.5C4.45163 0.5 2.96083 1.23225 2.01209 2.45884C0.976407 3.79821 0.725568 5.46177 1.30588 7.14305C1.70675 8.30446 2.43841 9.29558 3.14593 10.2541ZM2.75305 3.03246C3.52562 2.03369 4.73944 1.43737 5.99998 1.43737C7.26052 1.43737 8.47434 2.03369 9.24691 3.03246L9.24684 3.03243C10.0828 4.11343 10.2822 5.46462 9.80852 6.83705C9.4544 7.86293 8.76606 8.79539 8.10039 9.69717C7.5821 10.3993 7.73721 10.1845 5.99998 12.6763C4.26456 10.187 4.41771 10.399 3.89957 9.69717C3.2339 8.79539 2.54556 7.86289 2.19144 6.83705C1.71775 5.46459 1.91718 4.11343 2.75305 3.03246Z"
                                        fill="white" stroke="white" stroke-width="0.3" />
                                    <path
                                        d="M3.53116 12.2865C3.393 12.0677 3.10369 12.0023 2.88495 12.1405L1.55299 12.9823C1.26243 13.1659 1.26214 13.591 1.55299 13.7748L5.75031 16.4276C5.90312 16.5242 6.09787 16.5241 6.25065 16.4276L10.448 13.7748C10.7386 13.5912 10.7388 13.1661 10.448 12.9823L9.116 12.1405C8.8972 12.0023 8.60792 12.0677 8.46979 12.2865C8.3316 12.5053 8.39693 12.7948 8.61567 12.933L9.32065 13.3786L6.00046 15.4769L2.6803 13.3786L3.38529 12.933C3.60402 12.7948 3.66933 12.5053 3.53116 12.2865Z"
                                        fill="white" stroke="white" stroke-width="0.3" />
                                </svg>
                            </span>
                            Sahas housing society, Garkheda Chh.Sambhajinagar 
                        </li>
                        <!-- <li class="nav-item">
                            <a href="javascript:void(0)" class="btn btn-link p-0 tt-theme-toggle fw-normal">
                                <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark">Dark <i class="fas fa-moon fs-lg ms-1"></i></div>
                                <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light">Light <i class="fas fa-sun fs-lg ms-1"></i></div>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="gshop-navbar bg-white rounded ps-lg-5 position-relative">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-3 col-md-3 col-5">
                    <a href="./../home/index.php" class="logo"><img src="../assets/img/hslogo.png" alt="logo" style="height: 70px;" class="img-fluid"></a>
                </div>
                <div class="col-xxl-10 col-xl-9 col-md-9 col-7">
                    <div class="gshop-navbar-right d-flex align-items-center justify-content-end position-relative">

                        <nav class="gshop-navmenu ms-3 d-none d-xl-block">
                            <ul class="d-flex align-itmes-center justify-content-end">
                                <li class="">
                                    <a href="./../home/index.php">Home<span class="ms-1 fs-xs float-end"></a>
                                </li>
                                <li class="">
                                    <a href="./../home/about.php">About Us<span class="ms-1 fs-xs float-end"></a>
                                </li>
                                <li class="">
                                    <a href="./../home/products.php">Product<span class="ms-1 fs-xs float-end"></a>
                                </li>
                                <li class="">
                                    <a href="./../home/contact.php">Contact Us<span class="ms-1 fs-xs float-end"></a>
                                </li>
                            </ul>
                        </nav>
                        <div class="gshop-header-icons d-none d-md-inline-flex align-items-center justify-content-end ms-3">

                            <?php
                            if (isset($_SESSION['useremail'])) {
                            ?>
                                <div class="gshop-header-user position-relative">
                                    <a type="button" class="header-icon">
                                        <svg width="18" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.092 11.9546C12.6656 11.9546 14.0281 11.3902 15.1416 10.2766C16.2547 9.16322 16.8193 7.80093 16.8193 6.2271C16.8193 4.65382 16.2549 3.29134 15.1414 2.1776C14.0279 1.0644 12.6654 0.5 11.092 0.5C9.51825 0.5 8.156 1.0644 7.04266 2.17778C5.92931 3.29116 5.36475 4.65363 5.36475 6.2271C5.36475 7.80093 5.92931 9.1634 7.04266 10.2768C8.15636 11.39 9.51879 11.9546 11.092 11.9546ZM8.0281 3.16308C8.88239 2.30877 9.88453 1.89349 11.092 1.89349C12.2993 1.89349 13.3017 2.30877 14.1561 3.16308C15.0104 4.01757 15.4259 5.01992 15.4259 6.2271C15.4259 7.43464 15.0104 8.43681 14.1561 9.2913C13.3017 10.1458 12.2993 10.5611 11.092 10.5611C9.88489 10.5611 8.88275 10.1456 8.0281 9.2913C7.17364 8.43699 6.7582 7.43464 6.7582 6.2271C6.7582 5.01992 7.17364 4.01757 8.0281 3.16308Z" fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                            <path d="M21.1339 18.893C21.1012 18.4201 21.0352 17.9043 20.9379 17.3596C20.8397 16.8108 20.7133 16.292 20.562 15.8178C20.4055 15.3277 20.1931 14.8438 19.9301 14.38C19.6575 13.8986 19.3371 13.4794 18.9776 13.1345C18.6016 12.7736 18.1414 12.4835 17.6091 12.2719C17.0787 12.0614 16.4909 11.9547 15.8621 11.9547C15.6152 11.9547 15.3763 12.0564 14.9151 12.3576C14.6313 12.5433 14.2993 12.7581 13.9287 12.9956C13.6118 13.1982 13.1825 13.3879 12.6523 13.5598C12.135 13.7277 11.6098 13.8129 11.0912 13.8129C10.5729 13.8129 10.0477 13.7277 9.53001 13.5598C9.00034 13.3881 8.57088 13.1984 8.25455 12.9958C7.88747 12.7605 7.55527 12.5457 7.26718 12.3574C6.80634 12.0562 6.56753 11.9545 6.32059 11.9545C5.69163 11.9545 5.10401 12.0614 4.57378 12.2721C4.04189 12.4833 3.58143 12.7734 3.20512 13.1347C2.84561 13.4798 2.52522 13.8988 2.25281 14.38C1.99019 14.8438 1.77758 15.3276 1.62108 15.818C1.46993 16.2922 1.34351 16.8108 1.24533 17.3596C1.14788 17.9035 1.082 18.4195 1.04933 18.8935C1.01722 19.3569 1.00098 19.8393 1.00098 20.3266C1.00098 21.5934 1.40238 22.6189 2.19394 23.3752C2.97572 24.1216 4.00996 24.5 5.26808 24.5H16.9157C18.1735 24.5 19.2077 24.1216 19.9897 23.3752C20.7814 22.6194 21.1828 21.5935 21.1828 20.3264C21.1826 19.8374 21.1662 19.3551 21.1339 18.893ZM19.0123 22.3449C18.4957 22.8381 17.8099 23.0779 16.9155 23.0779H5.26808C4.37354 23.0779 3.68773 22.8381 3.17135 22.3451C2.66474 21.8613 2.41854 21.2008 2.41854 20.3266C2.41854 19.8718 2.43349 19.4229 2.46339 18.9918C2.49255 18.569 2.55216 18.1044 2.64056 17.6108C2.72786 17.1233 2.83896 16.6658 2.9711 16.2516C3.09789 15.8545 3.27082 15.4612 3.48527 15.0824C3.68995 14.7214 3.92544 14.4116 4.18529 14.1621C4.42835 13.9286 4.73471 13.7375 5.0957 13.5942C5.42956 13.4616 5.80476 13.3891 6.21208 13.3781C6.26172 13.4046 6.35012 13.4552 6.49334 13.5488C6.78475 13.7394 7.12064 13.9567 7.49197 14.1946C7.91054 14.4624 8.44981 14.7042 9.09409 14.9128C9.75277 15.1265 10.4245 15.235 11.0913 15.235C11.7581 15.235 12.4301 15.1265 13.0884 14.913C13.7333 14.704 14.2723 14.4624 14.6915 14.1943C15.0715 13.9506 15.3979 13.7395 15.6894 13.5488C15.8326 13.4553 15.921 13.4046 15.9706 13.3781C16.3781 13.3891 16.7533 13.4616 17.0874 13.5942C17.4482 13.7375 17.7545 13.9288 17.9976 14.1621C18.2574 14.4114 18.4929 14.7212 18.6976 15.0826C18.9122 15.4612 19.0854 15.8547 19.212 16.2515C19.3443 16.6662 19.4556 17.1235 19.5427 17.6106C19.6309 18.1052 19.6907 18.5699 19.7199 18.992V18.9924C19.7499 19.4218 19.7651 19.8705 19.7653 20.3266C19.7651 21.201 19.5189 21.8613 19.0123 22.3449Z" fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                        </svg>
                                        <?php echo $_SESSION['username'] ?>
                                    </a>
                                    <div class="user-menu-wrapper">
                                        <ul class="user-menu">
                                            <li><a href="./../home/my-account.php"><span class="me-2"><i
                                                            class="fa-solid fa-user"></i></span>My Account</a></li>
                                            <li><a href="./../home/cart.php"><span class="me-2"><i
                                                            class="fa-solid fa-tags"></i></span>My Cart</a></li>
                                            <li><a href="./../home/wishlist.php"><span class="me-2"><i
                                                            class="fa-solid fa-tags"></i></span>My Wishlist</a></li>
                                            <li><a href="./../handler/logout_handle.php"><span class="me-2"><i
                                                            class="fa-solid fa-arrow-right-from-bracket"></i></span>Sign
                                                    Out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="gshop-header-user position-relative">
                                    <a href="./../Home/login.php" class="header-icon">
                                        <svg width="18" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.092 11.9546C12.6656 11.9546 14.0281 11.3902 15.1416 10.2766C16.2547 9.16322 16.8193 7.80093 16.8193 6.2271C16.8193 4.65382 16.2549 3.29134 15.1414 2.1776C14.0279 1.0644 12.6654 0.5 11.092 0.5C9.51825 0.5 8.156 1.0644 7.04266 2.17778C5.92931 3.29116 5.36475 4.65363 5.36475 6.2271C5.36475 7.80093 5.92931 9.1634 7.04266 10.2768C8.15636 11.39 9.51879 11.9546 11.092 11.9546ZM8.0281 3.16308C8.88239 2.30877 9.88453 1.89349 11.092 1.89349C12.2993 1.89349 13.3017 2.30877 14.1561 3.16308C15.0104 4.01757 15.4259 5.01992 15.4259 6.2271C15.4259 7.43464 15.0104 8.43681 14.1561 9.2913C13.3017 10.1458 12.2993 10.5611 11.092 10.5611C9.88489 10.5611 8.88275 10.1456 8.0281 9.2913C7.17364 8.43699 6.7582 7.43464 6.7582 6.2271C6.7582 5.01992 7.17364 4.01757 8.0281 3.16308Z" fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                            <path d="M21.1339 18.893C21.1012 18.4201 21.0352 17.9043 20.9379 17.3596C20.8397 16.8108 20.7133 16.292 20.562 15.8178C20.4055 15.3277 20.1931 14.8438 19.9301 14.38C19.6575 13.8986 19.3371 13.4794 18.9776 13.1345C18.6016 12.7736 18.1414 12.4835 17.6091 12.2719C17.0787 12.0614 16.4909 11.9547 15.8621 11.9547C15.6152 11.9547 15.3763 12.0564 14.9151 12.3576C14.6313 12.5433 14.2993 12.7581 13.9287 12.9956C13.6118 13.1982 13.1825 13.3879 12.6523 13.5598C12.135 13.7277 11.6098 13.8129 11.0912 13.8129C10.5729 13.8129 10.0477 13.7277 9.53001 13.5598C9.00034 13.3881 8.57088 13.1984 8.25455 12.9958C7.88747 12.7605 7.55527 12.5457 7.26718 12.3574C6.80634 12.0562 6.56753 11.9545 6.32059 11.9545C5.69163 11.9545 5.10401 12.0614 4.57378 12.2721C4.04189 12.4833 3.58143 12.7734 3.20512 13.1347C2.84561 13.4798 2.52522 13.8988 2.25281 14.38C1.99019 14.8438 1.77758 15.3276 1.62108 15.818C1.46993 16.2922 1.34351 16.8108 1.24533 17.3596C1.14788 17.9035 1.082 18.4195 1.04933 18.8935C1.01722 19.3569 1.00098 19.8393 1.00098 20.3266C1.00098 21.5934 1.40238 22.6189 2.19394 23.3752C2.97572 24.1216 4.00996 24.5 5.26808 24.5H16.9157C18.1735 24.5 19.2077 24.1216 19.9897 23.3752C20.7814 22.6194 21.1828 21.5935 21.1828 20.3264C21.1826 19.8374 21.1662 19.3551 21.1339 18.893ZM19.0123 22.3449C18.4957 22.8381 17.8099 23.0779 16.9155 23.0779H5.26808C4.37354 23.0779 3.68773 22.8381 3.17135 22.3451C2.66474 21.8613 2.41854 21.2008 2.41854 20.3266C2.41854 19.8718 2.43349 19.4229 2.46339 18.9918C2.49255 18.569 2.55216 18.1044 2.64056 17.6108C2.72786 17.1233 2.83896 16.6658 2.9711 16.2516C3.09789 15.8545 3.27082 15.4612 3.48527 15.0824C3.68995 14.7214 3.92544 14.4116 4.18529 14.1621C4.42835 13.9286 4.73471 13.7375 5.0957 13.5942C5.42956 13.4616 5.80476 13.3891 6.21208 13.3781C6.26172 13.4046 6.35012 13.4552 6.49334 13.5488C6.78475 13.7394 7.12064 13.9567 7.49197 14.1946C7.91054 14.4624 8.44981 14.7042 9.09409 14.9128C9.75277 15.1265 10.4245 15.235 11.0913 15.235C11.7581 15.235 12.4301 15.1265 13.0884 14.913C13.7333 14.704 14.2723 14.4624 14.6915 14.1943C15.0715 13.9506 15.3979 13.7395 15.6894 13.5488C15.8326 13.4553 15.921 13.4046 15.9706 13.3781C16.3781 13.3891 16.7533 13.4616 17.0874 13.5942C17.4482 13.7375 17.7545 13.9288 17.9976 14.1621C18.2574 14.4114 18.4929 14.7212 18.6976 15.0826C18.9122 15.4612 19.0854 15.8547 19.212 16.2515C19.3443 16.6662 19.4556 17.1235 19.5427 17.6106C19.6309 18.1052 19.6907 18.5699 19.7199 18.992V18.9924C19.7499 19.4218 19.7651 19.8705 19.7653 20.3266C19.7651 21.201 19.5189 21.8613 19.0123 22.3449Z" fill="#5D6374" stroke="#5D6374" stroke-width="0.2" />
                                        </svg>
                                    </a>
                                    <a class="text-decoration-none contact_us" href="./../Home/login.php">login</a>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="gshop-header-cart position-relative">
                                <button type="button" class="header-icon">
                                    <svg width="18" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.1704 23.9559L19.6264 7.01422C19.5843 6.55156 19.1908 6.19718 18.7194 6.19718H15.5355V4.78227C15.5355 2.14533 13.3583 0 10.6823 0C8.00628 0 5.82937 2.14533 5.82937 4.78227V6.19718H2.6433C2.17192 6.19718 1.77839 6.55156 1.73625 7.01422L0.186259 24.0225C0.163431 24.2735 0.248671 24.5223 0.421216 24.7082C0.593761 24.8941 0.837705 25 1.0933 25H20.2695C20.2702 25 20.2712 25 20.2719 25C20.775 25 21.1826 24.5982 21.1826 24.1027C21.1825 24.0528 21.1784 24.0036 21.1704 23.9559ZM7.65075 4.78227C7.65075 3.1349 9.01071 1.79465 10.6824 1.79465C12.3542 1.79465 13.7142 3.1349 13.7142 4.78227V6.19718H7.65075V4.78227ZM2.08948 23.2055L3.47591 7.99183H5.82937V9.59649C5.82937 10.0921 6.237 10.4938 6.74006 10.4938C7.24313 10.4938 7.65075 10.0921 7.65075 9.59649V7.99183H13.7142V9.59649C13.7142 10.0921 14.1219 10.4938 14.6249 10.4938C15.128 10.4938 15.5356 10.0921 15.5356 9.59649V7.99183H17.8869L19.2733 23.2055H2.08948Z" fill="#5D6374" />
                                    </svg>
                                </button>
                                <div class="cart-box-wrapper">
                                    <div class="apt_cart_box theme-scrollbar">
                                        <?php
                                        if (isset($_SESSION['username'])) {
                                        ?>
                                            <ul class="at_scrollbar scrollbar">
                                                <?php
                                                $total = 0;
                                                foreach ($products as $product) {
                                                ?>
                                                    <li class="d-flex align-items-center">
                                                        <div class="thumb-wrapper">
                                                            <a href="#"><img src="../common_images/product/<?= $product['product_image'] ?>" alt="products" class="img-fluid"></a>
                                                        </div>
                                                        <div class="items-content ms-3">
                                                            <a href="product-details.html">
                                                                <h6 class="mb-1"><?= $product['product_name'] ?></h6>
                                                            </a>
                                                            <div class="products_meta d-flex align-items-center">
                                                                <div>
                                                                    <?php
                                                                    $qty = $product['productqty']; // Get the quantity value
                                                                    $price = $product['product_price'];
                                                                    $total_price = 0;

                                                                    if (strpos($qty, 'kg') !== false) {
                                                                        // Convert kg to grams (1kg = 1000g) and calculate
                                                                        $number = (float) str_replace('kg', '', $qty);
                                                                        $singletotal = $price * $number;
                                                                    } elseif (strpos($qty, 'gm') !== false) {
                                                                        $number = (float) str_replace('gm', '', $qty);
                                                                        $singletotal = $price * ($number / 1000);
                                                                    } elseif (strpos($qty, 'pcs') !== false || strpos($qty, 'pieces') !== false) {
                                                                        // Handle pieces directly as integers
                                                                        $number = (int) filter_var($qty, FILTER_SANITIZE_NUMBER_INT);
                                                                        $singletotal = $price * $number;
                                                                    } else {
                                                                        // Default case (if no unit is provided, assume it's a direct quantity)
                                                                        $number = (float) $qty;
                                                                        $singletotal = $price * $number;
                                                                    }

                                                                    // Update total cart price
                                                                    $total += $singletotal;
                                                                    ?>

                                                                    <span class="price text-primary fw-semibold"><?= number_format($price, 2) ?> (<?= $product['product_qty'] ?>) </span>
                                                                    <span class="count">x <?= $qty ?></span>
                                                                    <span class="count">= <?= number_format($singletotal, 2) ?></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </li>
                                                <?php
                                                }
                                                ?>

                                            </ul>
                                            <div class="d-flex align-items-center justify-content-between mt-3">
                                                <h6 class="mb-0">Subtotal:</h6>
                                                <span class="fw-semibold text-primary"><?= number_format($total, 2) ?></span>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <a href="<?php echo isset($_SESSION['username']) ? './../home/cart.php' : './../home/login.php'; ?>" class="btn btn-primary btn-md d-block mt-4">
                                            <span class="me-2"><i class="fa-solid fa-wallet"></i></span>View Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="gshop-offcanvas-btn offcanvas-toggle ms-3">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5892 0C1.66061 0 0.0917969 1.56893 0.0917969 3.4974C0.0917969 5.42588 1.65997 6.9947 3.5892 6.9947C5.51844 6.9947 7.08661 5.42588 7.08661 3.4974C7.08661 1.56893 5.51768 0 3.5892 0Z" fill="white" />
                                <path d="M14.909 0C12.9805 0 11.4116 1.56893 11.4116 3.4974C11.4116 5.42588 12.9805 6.9947 14.909 6.9947C16.8376 6.9947 18.4068 5.42588 18.4068 3.4974C18.4068 1.56893 16.8383 0 14.909 0Z" fill="white" />
                                <path d="M26.411 6.99481C28.3391 6.99481 29.9084 5.42599 29.9084 3.49751C29.9084 1.56903 28.3404 0 26.411 0C24.4815 0 22.9136 1.56893 22.9136 3.4974C22.9136 5.42588 24.4827 6.99481 26.411 6.99481Z" fill="white" />
                                <path d="M3.49805 18.2016C5.42653 18.2016 6.99578 16.6331 6.99578 14.7043C6.99578 12.7754 5.42653 11.2066 3.49805 11.2066C1.56958 11.2066 0 12.7755 0 14.7043C0 16.6331 1.56958 18.2016 3.49805 18.2016Z" fill="white" />
                                <path d="M14.8172 18.2016C16.7454 18.2016 18.3146 16.6331 18.3146 14.7043C18.3146 12.7754 16.7467 11.2066 14.8172 11.2066C12.8881 11.2066 11.3198 12.7754 11.3198 14.7043C11.3198 16.6331 12.8888 18.2016 14.8172 18.2016Z" fill="white" />
                                <path d="M26.3205 18.2016C28.2494 18.2016 29.8179 16.6331 29.8179 14.7043C29.8179 12.7754 28.2494 11.2066 26.3205 11.2066C24.3916 11.2066 22.8218 12.7754 22.8218 14.7043C22.8218 16.6331 24.391 18.2016 26.3205 18.2016Z" fill="white" />
                                <path d="M3.57813 22.3786C1.64965 22.3786 0.0800781 23.9471 0.0800781 25.876C0.0800781 27.8041 1.64965 29.3733 3.57813 29.3733C5.50661 29.3733 7.07543 27.8049 7.07543 25.876C7.07543 23.9471 5.50661 22.3786 3.57813 22.3786Z" fill="white" />
                                <path d="M14.898 22.3786C12.9694 22.3786 11.3999 23.9471 11.3999 25.876C11.3999 27.8041 12.9688 29.3733 14.898 29.3733C16.8261 29.3733 18.3953 27.8049 18.3953 25.876C18.3953 23.9471 16.8261 22.3786 14.898 22.3786Z" fill="white" />
                                <path d="M26.4002 22.3786C24.4721 22.3786 22.9028 23.9471 22.9028 25.876C22.9028 27.8041 24.4721 29.3733 26.4002 29.3733C28.3291 29.3733 29.8976 27.8049 29.8976 25.876C29.8976 23.9471 28.3284 22.3786 26.4002 22.3786Z" fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--offcanvas menu start-->
<div class="offcanvas_menu position-fixed">
    <div class="tt-short-info d-none d-md-none d-lg-none d-xl-block">
        <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
        <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="../assets/img/hslogo.png" style="height: 80px;" alt="logo" /></a>
        <div class="offcanvas-content">
            <h4 class="mb-4">About Us</h4>
            <p>
                Welcome to HeavenlySweets, where every bite tells a story of love, tradition, and excellence. Our journey began with a passion for crafting sweets that not only satisfy cravings but also bring joy to every occasion.
            </p>
            <p>
                Over the years, we’ve grown into a trusted name known for our commitment to quality, authenticity, and innovation.
            </p>
            <a href="./../home/about.php" class="btn btn-primary mt-4">About Us</a>
        </div>
        <div class="offcanvas-contact mt-5">
            <h5 class="mb-20">Contact Info</h5>
            <address>
                Sahas housing society, Garkheda Chh.Sambhajinagar <br />
                <a href="tel:+911111111111">+911111111111</a> <br />
                <a href="mailto:heavenlysweets@support.com">heavenlysweets@support.com</a>
            </address>
        </div>
        <div class="social-contact offcanvas_social mt-4">
            <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
    <div class="mobile-menu d-md-block d-lg-block d-xl-none">
        <button class="offcanvas-close"><i class="fa-solid fa-xmark"></i></button>
        <a href="#" class="d-inline-block mb-5"><img src="../assets/img/hslogo.png" alt="logo" style="height: 70px;" /></a>
        <nav class="mobile-menu-wrapper mt-4">
            <ul>
                <li class="has-submenu">
                    <!-- <a href="javascript:void(0)">Home<span class="ms-1 fs-xs float-end"><i class="fa-solid fa-angle-right"></i></span></a> -->
                    <a href="./../home/index.php">Home<span class="ms-1 fs-xs float-end"></a>
                </li>
                <li class="has-submenu">
                    <a href="./../home/about.php">About Us<span class="ms-1 fs-xs float-end"></a>
                </li>
                <li class="has-submenu">
                    <a href="./../home/products.php">Product<span class="ms-1 fs-xs float-end"></a>
                </li>
                <li class="has-submenu">
                    <a href="./../home/contact.php">Contact Us<span class="ms-1 fs-xs float-end"></a>
                </li>
            </ul>
        </nav>
        <div class="contact-info mt-8">
            <h5 class="mb-20">Contact Info</h5>
            <address>
                Sahas housing society, Garkheda Chh.Sambhajinagar <br />
                <a href="tel:+911111111111">+911111111111</a> <br />
                <a href="mailto:heavenlysweets@support.com">heavenlysweets@support.com</a>
            </address>
            <div class="social-contact">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu end-->
<!--header section end-->