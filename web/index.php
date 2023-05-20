<?php
session_start();
       if(isset($_SESSION['name'])) {

    include_once '../lib/helpers.php';
    include_once '../view/Partials/head.php';
     
?>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php
            include_once '../view/Partials/sidebar-left.php';
        ?>
        <div class="container-fluid d-flex flex-column" id="content-wrapper">
            <?php include_once '../view/Partials/navbar.php'; ?>
            <div id="page-wrapper">
                
                <?php
                    if(isset($_GET['modulo'])){
                        resolve();
                    }
                    else{
                        ?>
                            <div class="row">
                            <div class="col">
                                <h1 class="page-header"></h1>
                            </div>
                                <?php
                                    include_once '../view/Partials/dashboard.php';
                                ?>
                            </div>
                            <!-- /.row -->
                            <div class="row"> 
                                
                            </div>
                        <?php
                    }
                ?>
            
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#page-container -->
    </div>
    <!-- /#wrapper -->
<?php
        include_once '../view/Partials/footer.php';
?>
<?php 
       }else{
            header('Location: login.php');
       }
?>