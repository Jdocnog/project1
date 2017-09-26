<?php
$pageTitle='The R Restaurant';
$description='Main page for restaurant';

include('include/header.php');
session_start();
include('include/fucntions.php');
?>
    <main> 
        <p>
           Hello! Welcome to The R Restaurant Website.  Here we 
           will be selling you the best food that you have never had,
           or will have.  
           
           You can choose from any of our appetizers, entrees, and dessert
           and pick whatever catches your eye.
           
           Click below to start your order!
        </p>
        
        <form action="./appmenu.php">
            <input type="submit" name="startOrder">Start Ordering!
        </form>


    </main>  

    <?php
        include('include/footer.php');
    ?>
  </body>
</html>
