<?php
include('./../includes/header.php');

if(isset($_GET['offerid']))
{
    $offerid = $_GET['offerid'];
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
        <h1 class="h3 mb-0 text-gray-800">New Offer</h1>
    </div>

    <div class="container-fluid col-2"></div>
    <div class="container-fluid col-8">
        <br>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>
        <!-- Page Heading -->
        <?php
                $query = "SELECT * FROM offer WHERE offeruid='$offerid'";
                $result = mysqli_query($conn, $query);

                $row = mysqli_fetch_assoc($result);
            ?>

        <form action="../handler/edit_offer_handle.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $offerid; ?>" name="offerid" />    
            <div class="form-group">
                <label for="catname">Offer Heading</label>
                <input type="text" class="form-control" id="heading"
                    name="heading" placeholder="Enter Offer Heading" value="<?php echo $row['offerheading']; ?>" required>
            </div>
            <div class="form-group">
                <label for="catname">Offer Sub-Heading</label>
                <input type="text" class="form-control" id="subheading"
                    name="subheading" placeholder="Enter Offer Sub Heading" value="<?php echo $row['offersubheading']; ?>" required>
            </div>
            <div class="form-group">
                <label for="catimg">Offer Image</label>
                <input type="file" class="form-control" id="catimg" name="img"  />
            </div>
            <div class="form-group">
                <label for="catname">Offer Percentage</label>
                <input type="text" class="form-control" id="percent"
                    name="percent" placeholder="Enter Offer Percentage" value="<?php echo $row['offerpercentage']; ?>" required>
            </div>
            <div class="form-group">
                <label for="catname">Offer Code</label>
                <input type="text" class="form-control" id="code"
                    name="code" placeholder="Enter Offer Code" value="<?php echo $row['offercode']; ?>" required>
            </div>

            <center> <button type="submit" class="btn btn-success" name="editofferbtn">Submit</button></center>
        </form>

    </div>
    <div class="container-fluid col-2"></div>
</div>
<!-- /.container-fluid -->


<?php
include('./../includes/footer.php');
?>