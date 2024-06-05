<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/header.php") ?>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?php include("includes/topbar.php") ?>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <?php include("includes/sidebar.php"); ?>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                          Patients
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Date of Birth</th>
                                        <th>Contact Info</th>
                                        <th>Address</th>
                                        <th>COVID Status</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </thead>
                              
                                <tbody>
                                    <?php
                                    // Include database connection file
                                    include_once("config/dbcon.php");

                                    // Fetch data from the database
                                    $result = mysqli_query($conn, "SELECT * FROM patients");
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['first_name'] . "</td>";
                                        echo "<td>" . $row['last_name'] . "</td>";
                                        echo "<td>" . $row['date_of_birth'] . "</td>";
                                        echo "<td>" . $row['contact_info'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                        echo "<td>" . $row['covid_status'] . "</td>";
                                        echo "<td>" . $row['created_at'] . "</td>";
                                        echo "<td>" . $row['updated_at'] . "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <?php include "includes/footer.php"; ?> 
            </footer>
        </div>
    </div>
    <?php include "includes/script.php"; ?>
    <?php include('includes/alert.php'); ?>
</body>
</html>
