
<?php

$pageTitle='Cart';
$description='This will display user cart';

include('include/header.php');
session_start();
include('./include/functions.php');
?>
	

	<main>
            <h2>Cart contents:</h2>
            <?php
            display_cart();
            ?>
            <form action="./shipping.php">
                <input type="submit" value="Proceed to Shipping">
            </form>
        </main>  
        
        <?php
            include('include/footer.php');
        ?>
 
    </body>
</html>

