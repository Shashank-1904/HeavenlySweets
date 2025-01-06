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
        <h1 class="h3 mb-0 text-gray-800">New Offer</h1>
    </div>

    <div class="container-fluid col-2"></div>
    <div class="container-fluid col-8">
        <br>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>
        <!-- Page Heading -->
        <form action="../handler/new_offer_handle.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="catname">Offer Heading</label>
                <input type="text" class="form-control" id="heading"
                    name="heading" placeholder="Enter Offer Heading" required>
            </div>
            <div class="form-group">
                <label for="catname">Offer Sub-Heading</label>
                <input type="text" class="form-control" id="subheading"
                    name="subheading" placeholder="Enter Offer Sub Heading" required>
            </div>
            <div class="form-group">
                <label for="catimg">Offer Image</label>
                <input type="file" class="form-control" id="catimg" name="img" required />
            </div>
            <div class="form-group">
                <label for="catname">Offer Percentage</label>
                <input type="text" class="form-control" id="percent"
                    name="percent" placeholder="Enter Offer Percentage" required>
            </div>
            <div class="form-group">
                <label for="catname">Offer Code</label>
                <input type="text" class="form-control" id="code"
                    name="code" placeholder="Enter Offer Code" required>
            </div>

            <center> <button type="submit" class="btn btn-success" name="offerbtn">Submit</button></center>
        </form>

    </div>
    <div class="container-fluid col-2"></div>
</div>
<!-- /.container-fluid -->


<?php
include('./../includes/footer.php');
?>