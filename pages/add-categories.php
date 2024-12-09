<?php
include('./../includes/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">
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
        <form action="../handler/add_collection_form_handle.php" method="POST" name="add_collection_form"
            id="add_collection_form" enctype="multipart/form-data">
            <input type="hidden" name="formname" value="add_collection_form">
            <div class="form-group">
                <label for="collection_name">Collection Name</label>
                <input type="text" class="form-control" id="collection_name"
                    name="collection_name" placeholder="Enter Collection Type Name" required>
            </div>
            <div class="form-group">
                <label for="collection_dscr">Collection Description</label>
                <textarea type="text" class="form-control" id="collection_dscr"
                    name="collection_dscr" placeholder="Enter Collection Description" required=""></textarea>
            </div>
            <div class="form-group">
                <label for="collection_img_link">Collection Image</label>
                <input type="file" class="form-control" id="collection_img_link"
                    name="collection_img_link" placeholder="Enter Collection Image Link" required />
            </div>

            <center> <button type="submit" class="btn btn-success btn-lg">Add Collection</button></center>
        </form>

    </div>
    <div class="container-fluid col-2"></div>
</div>
<!-- /.container-fluid -->


<?php
include('./../includes/footer.php');
?>