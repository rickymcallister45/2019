<?php
include_once '../../resources/store/test.php';
include_once 'frontEnd/header.php';
include_once 'frontEnd/topNav.php';



echo "<body>
        <!-- Page Content -->
          <div class='container'>
           
            <div class='row'>
              <h1>Checkout</h1>
                <form action=''>
                  <table class='table table-striped'>
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Sub-total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>apple</td>
                        <td>$23</td>
                        <td>3</td>
                        <td>2</td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                
<!--  ***********CART TOTALS*************-->
            
            <div class='col-xs-4 pull-right'>
              <h2>Cart Totals</h2>
                <table class='table table-bordered' cellspacing='0'>
                  <tbody>
                    <tr class='cart-subtotal'>
                      <th>Items:</th>
                      <td><span class='amount'>4</span></td>
                    </tr>
                    <tr class='shipping'>
                      <th>Shipping and Handling</th>
                      <td>Free Shipping</td>
                    </tr>
                    <tr class='order-total'>
                      <th>Order Total</th>
                      <td><strong><span class='amount'>$3444</span></strong> </td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
          
          
        </div>
      </body>";
      
include_once 'frontEnd/footer.php';
?>
