
<?php

$pageTitle='Cart';
$description='This will display user cart';

include('include/header.php');
session_start();
include('./include/functions.php');
?>
	

	<main>
            <?php
            display_cart();
            ?>
        </main>  
        
        <?php
            include('include/footer.php');
        ?>
 
    </body>
</html>

