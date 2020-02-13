<!-- 
    Designed Mehala Keller
    Developed by Tj Liggett
 -->

 <!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php" ?>
    <body>
        <div class="content">
            <?php include "includes/navbar.php" ?>
            
            <form>
                <div class="petitionContainer">
                    <h1>Sign Our Petition</h1>
                    <!-- First Row -->
                    <div class="form-group">
                            <h4>First Name: </h4><input type="text" required>
                            <h4>Middle Initial: </h4><input type="text">
                            <h4>Last Name: </h4><input type="text" required>
                    </div>
                    <!-- Second Row -->
                    <div class="form-group">
                            <h4>Phone Number: </h4><input type="text" placeholder="417-999-9999" pattern="^[2-9]\d{2}-\d{3}-\d{4}$" required>
                            <h4>Email Address: </h4><input type="text" placeholder="myemail@example.com" pattern="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" required>
                    </div>
                            <input class="formButton" type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
        <div></div>
        <div></div>
    </body>
</html>





<!-- 
    <div class="container">
        <div class="row">
            <div>

            </div>
        </div>
    </div>
 -->