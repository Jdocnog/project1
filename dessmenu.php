
<?php
$pageTitle='Desserts';
$description='The R dessert menu page';

include('include/header.php');
session_start();
include('./include/functions.php');
?>	
 <body>
        <main>
            <?php
            display_menu("desserts", 4);
            ?>
        </main> 
  </body>
</html>