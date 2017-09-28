
<?php

$pageTitle='Desserts';
$description='The R dessert menu page';

include('include/header.php');
session_start();
include('./include/functions.php');
?>
	
<main>
            <?php
            include 'include/functions.php';
            display_des();
            ?>
        </main> 
	  
        
        <?php
            include('include/footer.php');
        ?>

	 
  
	

  </body>
</html>