<?php 

    if(isset($_POST["submit"])) {

        if(empty($_POST["email"])) {
            echo "An email is required <br>";
        } else {
            $email = $_POST["email"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email must be a valid email address";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <?php include("templates/header.php") ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action=<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <label for="email">Your Email:</label>
            <input type="email" name="email">
            <label for="title">Pizza title:</label>
            <input type="text" name="title">
            <label for="ingredients">Ingredients (comma seperated):</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" name="submit" class="btn brand z-depth-0">
            </div>
        </from>
    </section>

    <?php include("templates/footer.php") ?>
</html>