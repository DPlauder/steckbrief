<?php
include_once 'functions.php';
$user = [
    'firstname' => '',
    'lastname' => '',
    'age' => 0,
    'email' => '',
    'telefon' => '',
    'adress' => '',
    'city' => '',
    'plz' => '',
    'gender' => '',
    'image' => '',
    'imagepath' => ''
];
$errors = [
    'firstname' => '',
    'lastname' => '',
    'age' => '',
    'email' => '',
    'telefon' => '',
    'adress' => '',
    'city' => '',
    'plz' => '',
    'gender' => '',
    'imagesize' => ''
];
$max_file_size = 1024 * 1024 * 2;
$upload_dir = __DIR__ . '/uploads/';
$allowed_types = ['image/jpeg', 'image/png'];
$allowed_extensions = ['jpg', 'jpeg', 'png'];

$gender = '';
$genders = ['male', 'female', 'diverse'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $user['firstname'] = $_POST['firstname'];
    $user['lastname'] = $_POST['lastname'];
    $user['age'] = $_POST['age'];
    $user['email'] = $_POST['email'];
    $user['telefon'] = $_POST['telefon'];
    $user['adress'] = $_POST['adress'];
    $user['city'] = $_POST['city'];
    $user['plz'] = $_POST['plz'];
    $user['gender'] = $_POST['gender'] ?? '';

    $errors['firstname'] = isValidString($user['firstname']) ? '' : 'Firstname required';
    $errors['lastname'] = isValidString($user['lastname']) ? '' : 'Lastname required';
    $errors['age'] = isValidAge((int) $user['age']) ? '' : 'Age must be between 12 and 100';
    $errors['email'] = isValidEmail($user['email']) ? '' : 'Email not valid';
    $errors['telefon'] = isValidTel($user['telefon']) ? '' : 'Must start with + and no spaces';
    $errors['adress'] = isValidString($user['adress']) ? '' : 'Adress required';
    $errors['city'] = isValidString($user['city']) ? '' : 'City required';
    $errors['plz'] = isValidString($user['plz']) ? '' : 'PLZ required';
    $errors['gender'] = isValidGender(($user['gender'])) ? '' : 'You must choose a gender';
    //$errors['imagesize'] = getimagesize($_FILES['image']['name']) ? '' : 'Imagesize too big';


    if(!$errors['gender']){
        $gender = $user['gender'];
    }

    $user['imagepath'] = get_file_path($_FILES['image']['name'],$upload_dir); 
    
    if(!$errors['imagesize']){
        $_FILES['image']['name'] = $user['imagepath'];
        uploadFile($_FILES['image']);
    }

    $isErrors = implode($errors);
    
     if($isErrors) {
        include_once 'form.php';
    }else {
        include_once 'view.php';
    }
}

