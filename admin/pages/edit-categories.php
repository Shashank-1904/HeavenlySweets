<?php
include('./../includes/header.php');

if(isset($_GET['catid']))
{
    $catid = $_GET['catid'];
}
elseif(isset($_SESSION['message']))
{
    if($_SESSION['message']['type'] == 'errorr')
    $catid = $_SESSION['message']['id'];
}
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
        <h1 class="h3 mb-0 text-gray-800">Edit Categories</h1>
    </div>

    <div class="container-fluid col-2"></div>
    <div class="container-fluid col-8">
        <br>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>
        <!-- Page Heading -->
        <form action="../handler/edit_category_handle.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value=<?php echo $catid; ?> name="catid"/>
            <?php
                $query = "SELECT * FROM category WHERE catid='$catid'";
                $result = mysqli_query($conn, $query);

                $row = mysqli_fetch_assoc($result);
            ?>
            <div class="form-group">
                <label for="catname">Category Name</label>
                <input type="text" class="form-control" id="catname"
                    name="catname" placeholder="Enter Category Name" value="<?php echo $row['catname']; ?>" required>
            </div>
            <div class="form-group">
                <label for="catdscr">Category Description</label>
                <textarea type="text" class="form-control" id="catdscr" name="catdscr" placeholder="Enter Category Description" required=""><?php echo $row['catdscr']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="catimg">Category Image</label>
                <input type="file" class="form-control" id="catimg" name="catimg" />
            </div>

            <center> <button type="submit" class="btn btn-success" name="editcatbtn">Add Category</button></center>
        </form>

    </div>
    <div class="container-fluid col-2"></div>
</div>
<!-- /.container-fluid -->


<?php
include('./../includes/footer.php');
?>