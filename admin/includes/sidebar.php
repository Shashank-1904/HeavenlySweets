 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="../Home/index.php">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fa-solid fa-list"></i>
             <span>Categories</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="./../pages/add-categories.php">Add Categories</a>
                 <a class="collapse-item" href="./../pages/all-categories.php">All Categories</a>
             </div>
         </div>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
             aria-expanded="true" aria-controls="collapseThree">
             <i class="fa-solid fa-cake-candles"></i>
             <span>Products</span>
         </a>
         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="./../pages/add-products.php">Add Products</a>
                 <a class="collapse-item" href="./../pages/all-products.php">All Products</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
             aria-expanded="true" aria-controls="collapseFour">
             <i class="fa-solid fa-cake-candles"></i>
             <span>Offer</span>
         </a>
         <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="./../pages/new-offer.php">New Offer</a>
                 <a class="collapse-item" href="./../pages/all-offer.php">All Offers</a>
             </div>
         </div>
     </li>
 </ul>
 <!-- End of Sidebar -->