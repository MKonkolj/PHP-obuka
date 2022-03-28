<?php

class UsersView extends Users {

    public function showUser ($name) {
        $result = $this->getUser($name);
        echo "Full name: " . $result[0]["users_firstname"] . " " . $result[0]["users_lastname"];
        echo "<br>";
        echo "Date of birth: " . $result[0]["users_dateofbirth"];
        echo "<br>";
    }
}