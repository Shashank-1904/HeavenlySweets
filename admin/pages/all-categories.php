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
        <h1 class="h3 mb-0 text-gray-800">All Categories</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM category";
                            $result = mysqli_query($conn, $query);

                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="text-center">
                                                <img src="./../../common_images/category/<?php echo $row['catimg'];?>" class="rounded" alt="<?php echo $row['catimg'];?>" height="150" width="200">
                                            </div>
                                        </td>
                                        <td><?php echo $row['catname']; ?></td>
                                        <td><?php echo $row['catdscr']; ?></td>
                                        <td class="row mx-auto text-center">
                                            <form action="delete_category.php" method="POST" class="mr-2">
                                                <input type="hidden" name="catid" value="<?php echo $row['catid'];?>">
                                                <button type="submit" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <a href="edit_category.php?catid=<?php echo $row['catid']; ?>" class="btn btn-primary btn-circle">
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