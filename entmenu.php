
<?php

$pageTitle='Entrees';
$description='This is the Menu page that contains our entrees';

include('include/header.php');
session_start();
include('./include/functions.php');
?> 
        
         

	<main>
            <?php
            include 'include/functions.php';
            display_ent();
            ?>
        </main> 
   <?php
            include('include/footer.php');
        ?>
	 
  </body>
</html>