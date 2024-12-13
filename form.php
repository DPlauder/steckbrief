<?php
declare(strict_types=1);
include 'validate.php';
?>
<?php include 'header.php'?>
<form action="validate.php" method="POST" style="display:flex; flex-direction:column;" enctype="multipart/form-data">
    <div >
        Geschlecht:
        <div style="display:flex; flex-direction:row;">
            <?php foreach($genders as $sex) : ?>
                <label>
                    <input type="radio" id="male" name="gender" value="<?= $sex ?>" <?= $sex === $gender ? 'checked' : '' ?>>
                    <?=$sex?>
                </label>      
            <?php endforeach?>
        </div>
    </div>
    <span style="color: red"><?= $errors['gender']?></span>
    <label for="firstame">
        <input type="text" name="firstname" placeholder="Vorname" value="<?= $user['firstname'];?>">
        <span style="color: red"><?= $errors['firstname']?></span>
    </label>
    <label for="lastname">
        <input type="text" name="lastname" placeholder="Nachname" value="<?=$user['lastname'];?>">
        <span style="color: red"><?= $errors['lastname']?></span>
    </label>
    <label for="age">
        <input type="number" name="age" placeholder="Alter" value="<?=$user['age'];?>">
        <span style="color: red"><?= $errors['age']?></span>
    </label>
    <label for="email">
        <input type="text" name="email" placeholder="Email" value="<?=$user['email'];?>">
        <span style="color: red"><?= $errors['email']?></span>
    </label>
    <label for="telefon">
        <input type="tel" name="telefon" placeholder="Telefon" value="<?=$user['telefon'];?>">
        <span style="color: red"><?= $errors['telefon']?></span>
    </label>
    <label for="adress">
        <input type="text" name="adress" placeholder="Adresse" value="<?=$user['adress'];?>">
        <span style="color: red"><?= $errors['adress']?></span>
    </label>
    <label for="plz">
        <input type="number" name="plz" placeholder="Postleitzahl" value="<?=$user['plz'];?>">
        <span style="color: red"><?= $errors['plz']?></span>
    </label>
    <label for="city">
        <input type="text" name="city" placeholder="Ort" value="<?=$user['city'];?>">
        <span style="color: red"><?= $errors['city']?></span>
    </label>
    <input type="file" name="image" id="image" accept="image/jpeg, image/png">
    <span style="color: red"><?= $errors['imagesize']?></span>
    <input type="submit" value="Senden">
</form>
<?php include 'footer.php'?>

