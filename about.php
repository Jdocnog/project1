        <?php
            $pageTitle='About Page';
            $description='This page details the workload distribution of the '
                    . 'project';

            include('./include/header.php');
            session_start();
            include('./include/functions.php');
        ?>
        <main> 
            <p>This website serves as the submission for Project 1 in CS3800
                for Joe McCartney and Jordan Burkitt. The site showcases use of
                reading and writing to a file in php as well as using an associative
                2D array and included files.</p>
            <h2>Joe McCartney's Contributions</h2>
            <ul>
                <li>Implemented all functions other than display_menu()</li>
                <li>Styling for all pages (excluding nav bar)</li>
            </ul>
            <h2>Jordan Burkitt's Contributions</h2>
            <ul>
                <li>Implemented display_menu() function</li>
                <li>implemented and styled nav bar</li>
                <li>Wrote include files for header and footer</li>
            </ul>
            <p>i</p>
        </main>  
            <?php
                include('include/footer.php');
            ?>          
     </body>
</html>
