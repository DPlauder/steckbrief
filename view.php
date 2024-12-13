<?php include 'header.php';?>
<h3>Steckbrief</h3>
<div style="display: flex; flex-direction:row; height: 75vh;margin-left:auto; margin-right:auto;">
    <div>
        <img src="uploads/<?= $user['imagepath']?>" alt="" style="height:75%;">
    </div>
    <div>
        <h3>Persönliche Daten</h3>
        <table>
            <tr>
                <td>Vorname</td>
                <td><?= $user['firstname']?></td>
            </tr>
            <tr>
                <td>Nachname</td>
                <td><?= $user['lastname']?></td>
            </tr>
            <tr>
                <td>Geschlecht</td>
                <td><?= $user['gender']?></td>
            </tr>
            <tr>
                <td>Alter</td>
                <td><?= $user['age']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $user['email']?></td>
            </tr>
            <tr>
                <td>Telefon</td>
                <td><?= $user['telefon']?></td>
            </tr>
            <tr>
                <td>Straße</td>
                <td><?= $user['adress']?></td>
            </tr>
            
            <tr>
                <td>Ort</td>
                <td><?= $user['city']?></td>
            </tr>
        </table>
    </div>

</div>



<?php include 'footer.php';?>