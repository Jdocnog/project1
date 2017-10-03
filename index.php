        <?php
            $pageTitle='The R Restaurant';
            $description='Main page for restaurant';

            include('./include/header.php');
            session_start();
            include('./include/functions.php');
            if(!isset($_SESSION['menu_array'])) {
                $_SESSION['menu_array'] = array();
                init_array();
            }
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
                <input type="submit" name="start_order" value="Begin Order">
            </form>
        </main>  
            <?php
                include('include/footer.php');
            ?>          
     </body>
</html>
