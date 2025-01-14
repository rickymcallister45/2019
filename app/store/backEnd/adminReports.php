<?php

echo "<div class='row'>
        <div class='col-lg-12'>
          <h1 class='page-header'>
            Dashboard <small>Statistics Overview</small>
          </h1>
          <ol class='breadcrumb'>
            <li class='active'>
              <i class='fa fa-dashboard'></i> Dashboard
            </li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      <!-- FIRST ROW WITH PANELS -->
      <div class='row'>
        <div class='col-lg-4 col-md-6'>
          <div class='panel panel-yellow'>
            <div class='panel-heading'>
              <div class='row'>
                <div class='col-xs-3'>
                  <i class='fa fa-shopping-cart fa-5x'></i>
                </div>
                <div class='col-xs-9 text-right'>
                  <div class='huge'>";

countOrders();

            echo "</div>
                  <div>New Orders!</div>
                </div>
              </div>
            </div>
            <a href='./index.php?orders'>
              <div class='panel-footer'>
                <span class='pull-left'>View Details</span>
                <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                <div class='clearfix'></div>
              </div>
            </a>
          </div>
        </div>
        <div class='col-lg-4 col-md-6'>
          <div class='panel panel-red'>
            <div class='panel-heading'>
              <div class='row'>
                <div class='col-xs-3'>
                  <i class='fa fa-support fa-5x'></i>
                </div>
                <div class='col-xs-9 text-right'>
                  <div class='huge'>";

countProducts();

            echo "</div>
                  <div>Products!</div>
                </div>
              </div>
            </div>
            <a href='./index.php?products'>
              <div class='panel-footer'>
                <span class='pull-left'>View Details</span>
                <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                <div class='clearfix'></div>
              </div>
            </a>
          </div>
        </div>
        <div class='col-lg-4 col-md-6'>
          <div class='panel panel-green'>
            <div class='panel-heading'>
              <div class='row'>
                <div class='col-xs-3'>
                  <i class='fa fa-tasks fa-5x'></i>
                </div>
                <div class='col-xs-9 text-right'>
                  <div class='huge'>";

countCategories();

            echo "</div>
                  <div>Categories!</div>
                </div>
              </div>
            </div>
            <a href='./index.php?categories'>
              <div class='panel-footer'>
                <span class='pull-left'>View Details</span>
                <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                <div class='clearfix'></div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- SECOND ROW WITH TABLES-->
      <div class='row'>
        <div class='col-lg-6'>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              <h3 class='panel-title'>
                <i class='fa fa-money fa-fw'></i> Transactions Panel
              </h3>
            </div>
            <div class='panel-body'>
              <div class='table-responsive'>
                <table class='table table-bordered table-hover table-striped'>
          <thead>
            <tr>
              <th>Id</th>
              <th>Product Id</th>
              <th>Order Id</th>
              <th>Product Title</th>
              <th>Price</th>
              <th>Product Quantity</th>
            </tr>
          </thead>
          <tbody>";

adminGetReports();

    echo "</tbody>
        </table>
      </div>
    </div>
  </div>
</div>";
?>
