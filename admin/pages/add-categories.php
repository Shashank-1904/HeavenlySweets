<?php
include('./../includes/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['message'])): ?>
        <div class="toast <?php echo $_SESSION['message']['type']; ?>" id="toast">
            <span class="toast-text"><?php echo $_SESSION['message']['text']; ?></span>
            <button class="toast-close" id="closeToast">×</button>
        </div>
        <?php unset($_SESSION['message']); // Clear the session message 
        ?>
    <?php endif; ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Categories</h1>
    </div>

    <div class="container-fluid col-2"></div>
    <div class="container-fluid col-8">
        <br>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>
        <!-- Page Heading -->
        <form action="../handler/add_category_handle.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="catname">Category Name</label>
                <input type="text" class="form-control" id="catname"
                    name="catname" placeholder="Enter Category Name" required>
            </div>
            <div class="form-group">
                <label for="catdscr">Category Description</label>
                <textarea type="text" class="form-control" id="catdscr" name="catdscr" placeholder="Enter Category Description" required=""></textarea>
            </div>
            <div class="form-group">
                <label for="catimg">Category Image</label>
                <input type="file" class="form-control" id="catimg" name="catimg" required />
            </div>

            <center> <button type="submit" class="btn btn-success" name="addcatbtn">Add Category</button></center>
        </form>

    </div>
    <div class="container-fluid col-2"></div>
</div>
<!-- /.container-fluid -->


<?php
include('./../includes/footer.php');
?>