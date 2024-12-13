<?php
function e(string $input){
    return htmlspecialchars($input, ENT_QUOTES, 'UFT-8');
}

function isValidString(string $data) : bool {
    return (is_string($data) && strlen($data) > 0);
}
function isValidAge(int $age, int $maxAge = 100, int $minAge = 12) : bool{
    return ($age >= $minAge && $age <= $maxAge);
}
function isValidTel(string $telnumber): bool {
    return (preg_match('/^\+\d+$/', $telnumber));
}
function isValidEmail(string $email): bool{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
function isValidGender(string $gender): bool{
    if($gender){
        return true;
    }
    else{
        return false;
    }
}
function uploadFile(array $image){
    $filename = $image['name'];
    $destination = __DIR__ . '/uploads/' . $filename;
    move_uploaded_file($image['tmp_name'], $destination);
}

function get_file_path(string $filename, string $path) : string {

    $basename = pathinfo($filename, PATHINFO_FILENAME);
    $extensions = pathinfo($filename, PATHINFO_EXTENSION);
    $basename = preg_replace('/[^A-z0-9]/', '-', $basename);
    $i = 0;
    while (file_exists($path . $filename)){
        $i++;
        $filename = $basename . $i . '.' . $extensions;
    }
    return $filename;
};