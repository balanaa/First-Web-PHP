<?php
//var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $favouriteFruit = htmlspecialchars($_POST["favouriteFruit"]);

    if (empty($firstName) || empty($lastName) || empty($favouriteFruit)) {
        header("Location: ../index.php");
        exit();
    }

    echo "Welcome, $firstName $lastName!<br>";
    echo "Your favourite fruit is:";


    switch (htmlspecialchars($favouriteFruit)) {
        case "banana":
            echo "🍌";
            break;
        case "apple":
            echo "🍏";
            break;
        case "mango":
            echo "🥭";
            break;
        case "ponkan":
            echo "🍊";
            break;

    }

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}