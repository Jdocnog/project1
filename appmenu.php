
<?php
$pageTitle='Appetizers';
$description='Appetizer menu';

include('include/header.php');
session_start();
include('./include/functions.php');
?>
 <body>
        <main>
            <?php            
            display_menu("appetizers", 4);
            ?>
        </main>  
  </body>
</html>
