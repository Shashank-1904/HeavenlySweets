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
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Products</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Heading</th>
                            <th>Sub Heading</th>    
                            <th>Percentage</th>
                            <th>Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Query to fetch all products along with their names
                            $query = "SELECT * FROM offer";
                            $result = mysqli_query($conn, $query);

                            // Loop through and display products
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <img src="./../../common_images/offer/<?php echo $row['offerimg'];?>" class="rounded" alt="<?php echo $row['offerheading'];?>" height="150" width="200">
                                            </div>
                                        </td>
                                        <td><?php echo $row['offerheading']; ?></td>
                                        <td><?php echo $row['offersubheading']; ?></td>
                                        <td><?php echo $row['offerpercentage']; ?></td>
                                        <td><?php echo $row['offercode']; ?></td>
                                        <td class="row mx-auto text-center">
                                            <form action="../handler/delete_offer_handle.php" method="POST" class="mr-2">
                                                <input type="hidden" name="offerid" value="<?php echo $row['offeruid'];?>">
                                                <button type="submit" class="btn btn-danger btn-circle" name="deleteofferbtn">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>

                                            <!-- Edit Product Link -->
                                            <a href="edit_offer.php?offerid=<?php echo $row['offeruid']; ?>" class="btn btn-primary btn-circle">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php
include('./../includes/footer.php');
?>
