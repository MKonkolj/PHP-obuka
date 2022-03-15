<?php 

$email = $title = $ingredients = "";
$errors = [
    "email" => "",
    "title" => "",
    "ingredients" => ""
];

if(isset($_POST["submit"])) {

    if(empty($_POST["email"])) {
        $errors["email"] = "An email is required <br>";
    } else {
        $email = $_POST["email"];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Email must be a valid email address";
        }
    }

    if(empty($_POST["title"])) {
        $errors["title"] = "A title is required <br>";
    } else {
        $title = $_POST["title"];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors["title"] = "Title must be letters and spaces only";
        }
    }

    if(empty($_POST["ingredients"])) {
        $errors["ingredients"] = "At least one ingredient is required <br>";
    } else {
        $ingredients = $_POST["ingredients"];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors["ingredients"] = "Ingredients must be a comma separated list";
        }
    }

    if(array_filter($errors)) {
        // echo "errors in the form";
    } else {
        header("Location: index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <?php include("templates/header.php") ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <label for="email">Your Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors["email"] ?></div>
            <label for="title">Pizza title:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
            <div class="red-text"><?php echo $errors["title"] ?></div>
            <label for="ingredients">Ingredients (comma seperated):</label>
            <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
            <div class="red-text"><?php echo $errors["ingredients"] ?></div>
            <div class="center">
                <input type="submit" name="submit" class="btn brand z-depth-0">
            </div>
        </from>
    </section>

    <?php include("templates/footer.php") ?>
</html>