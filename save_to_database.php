<!-- filepath: /Users/daniel/Dev/PizzaPlace/save_to_database.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $email = htmlspecialchars($_POST['email']);

    $data = "Name: $name, Age: $age, Gender: $gender, Email: $email" . PHP_EOL;
    file_put_contents('database.txt', $data, FILE_APPEND);

    header('Location: The Main Attraction.html');
    exit();
}
?>