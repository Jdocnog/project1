
<?php
$pageTitle='Entrees';
$description='This is the Menu page that contains our entrees';

include('include/header.php');
session_start();
include('./include/functions.php');
?>
 <body>
	<main>
            <?php
            display_menu("entrees", 4);;
            ?>
        </main> 	 
  </body>
</html>