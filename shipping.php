
<?php
$pageTitle='Shipping Information';
$description='Gets user input for shipping information';

include('include/header.php');
session_start();
include('./include/functions.php');
?>
        <main>
            <h2>Please enter your shipping information below</h2>
            <form action="checkout.php">
                <ul>
                    <label>Address</label><li><input type="text" name="address"></li>
                    <label>City</label><li><input type="text" name="city"></li>
                    <label>State</label><li><input type="text" name="state"></li>
                    <label>Postal/ZIP Code</label><li><input type="text" name="zip"></li>
                </ul>
                <div><input type="submit" name="submit_shipping"></div>
            </form>
        </main>  
  
	<?php
            include('include/footer.php');
        ?>

  </body>
</html>


