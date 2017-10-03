
<?php
$pageTitle='Checkout';
$description='This page will display cart and total price';

include('include/header.php');
session_start();
include('./include/functions.php');
?>
 
	<main>
            <?php
            display_checkout();
            write_cart();
            ?>
        </main>  
  <?php
            include('include/footer.php');
        ?>
	  

  </body>
</html>