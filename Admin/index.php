<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php
include("../connection.php");
$taxies = "SELECT COUNT(id) as b FROM taxies";
$bookings = "SELECT COUNT(id) as b FROM bookings";
$drivers = "SELECT COUNT(id) as b FROM drivers";
$messages = "SELECT COUNT(id) as b FROM contacts";
$taxies_list = $conn->query($taxies);
$bookings_list = $conn->query($bookings);
$drivers_list = $conn->query($drivers);
$messages_list = $conn->query($messages);
while ($row = mysqli_fetch_array($drivers_list)) {

    $driver = $row['b'];
}
while ($row = mysqli_fetch_array($taxies_list)) {

    $taxi = $row['b'];
}
while ($row = mysqli_fetch_array($messages_list)) {

    $message = $row['b'];
}
while ($row = mysqli_fetch_array($bookings_list)) {

    $booking = $row['b'];
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>

<?php include 'includes/footer.php'; ?>