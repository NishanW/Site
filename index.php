<?php require_once 'html-header.php';?>

<?php
    $imageArray = glob("images/home/*.{JPG,jpg,png}", GLOB_BRACE);
    sort($imageArray);
?>

    <div class="container">
            <?php
                foreach ($imageArray as $value) {
                    echo "<div class='mainView fade'>";
                    echo "<img src=$value alt=$value>";
                    echo "<div id='text'>Sri Lanka will offer free tourist visas to citizens of 48 countries begining August 2019. see wehether you are eligible. Experience Unforgettable holidays, great food!</div>";
                    echo "</div>";
                }
            ?>
    
            <div class="flex">
                <?php 
                for ($x = 0; $x < count($imageArray); $x++) {
                    $fileName = pathinfo($imageArray[$x], PATHINFO_FILENAME);
                    $fileName = preg_replace('~\d~','',$fileName);
                        echo "<div class='dest'>";
                        echo "<a href='/attraction.php?dest=$fileName'>";
                        echo "<div class='dest_img'>";
                        echo "<img src=$imageArray[$x]>";
                        echo "</div>";
                        echo "<div>";
                        echo "<h2>";
                        echo "$fileName";
                        echo "</h2>";
                        echo "</div>";
                        echo "</a>";
                        echo "</div>";
                    }      
                ?>
            </div>
            <?php require_once 'footer.php';?>
    </div>

    <?php require_once 'site-header.php';?>
</body>
</html>