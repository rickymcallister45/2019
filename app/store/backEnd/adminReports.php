<?php
echo "<div class='row'>
        <h1 class='page-header'>
          All Products
        </h1>
        <table class='table table-hover'>
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Category</th>
              <th>Price</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody>";
adminGetProducts();            
    echo "</tbody>
        </table>
      </div>";
?>
