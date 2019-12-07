<?php
include_once '../../../resources/store/config.php';
include_once '../backEnd/header.php';

if(!isset($_SESSION['username'])) {
   redirect('../index.php');
}

   echo "<div id='page-wrapper'>
           <div class='container-fluid'>";
             
echo $_SERVER['REQUEST_URI'];

if($_SERVER['REQUEST_URI'] == 'app/store/admin/' || $_SERVER['REQUEST_URI'] == 'app/store/admin/index.php') {
   include '../backEnd/adminDashboardContent.php';
}

if(isset($_GET['orders'])) {
   include('../backEnd/adminOrders.php');
}

if(isset($_GET['products'])) {
   include('../backEnd/adminProducts.php');
}

if(isset($_GET['addProducts'])) {
   include('../backEnd/adminAddProducts.php');
}

if(isset($_GET['categories'])) {
   include('../backEnd/adminCategories.php');
}

if(isset($_GET['users'])) {
   include('../backEnd/adminUsers.php');
}

   
   echo "</div>
         <!-- /.container-fluid -->
       </div>
       <!-- /#page-wrapper -->
     </div>
     <!-- /#wrapper -->";

include_once '../backEnd/footer.php';   

?>
