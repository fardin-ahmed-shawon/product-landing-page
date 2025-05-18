<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// database connection
include('../dbConnection.php');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle file uploads
    $logo = $info['logo'] ?? null;
    if (!empty($_FILES['logo']['name'])) {
        $logo = 'uploads/' . basename($_FILES['logo']['name']);
        if (!move_uploaded_file($_FILES['logo']['tmp_name'], $logo)) {
            $logo = $info['logo']; // Revert to the existing logo if upload fails
        }
    }

    $fav = $info['fav'] ?? null;
    if (!empty($_FILES['fav']['name'])) {
        $fav = 'uploads/' . basename($_FILES['fav']['name']);
        if (!move_uploaded_file($_FILES['fav']['tmp_name'], $fav)) {
            $fav = $info['fav']; // Revert to the existing favicon if upload fails
        }
    }

    // Update logo and favicon in the database
    $updateQuery = "UPDATE website_info SET logo='$logo', fav='$fav' WHERE id=1";
    $conn->query($updateQuery);
}

// Fetch data to display in the sidebar
$infoQuery = "SELECT * FROM website_info WHERE id=1";
$infoResult = $conn->query($infoQuery);
$info = $infoResult->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.php -->
    <?php include('navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
        <?php include('sidebar.php'); ?>
        <div class="main-panel">
            <!--------------------------->
            <!-- START SETTINGS AREA -->
            <!--------------------------->
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Update Logo and Favicon</h4>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo" required>
                            </div>
                            <div class="form-group">
                                <label for="fav">Favicon</label>
                                <input type="file" class="form-control" id="fav" name="fav" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h4>Preview</h4>
                        <p><strong>Logo:</strong> <img src="<?= $info['logo'] ?? '#' ?>" alt="Logo" style="max-width: 100px;"></p>
                        <p><strong>Favicon:</strong> <img src="<?= $info['fav'] ?? '#' ?>" alt="Favicon" style="max-width: 50px;"></p>
                    </div>
                </div>
            </div>
            <!--------------------------->
            <!-- END SETTINGS AREA -->
            <!--------------------------->
            <!-- partial:partials/_footer.php -->
            <?php include('footer.php'); ?>
        </div>
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- JS FILES  -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/misc.js"></script>
<script src="js/main.js"></script>
</body>
</html>