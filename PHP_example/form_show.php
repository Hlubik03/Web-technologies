<?php
include "indexHead.php";
?>

<h1 class="mt-5 mb-4">Formuláre (Forms) - zobrazenie</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Položka</th>
            <th>Hodnota</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Login</td>
            <td><?php echo $_POST['login'] ?></td>
        </tr>
        <tr>
            <td>Heslo</td>
            <td><?php echo $_POST['heslo'] ?></td>
        </tr>
        <tr>
            <td>Emailová adresa</td>
            <td><?php echo $_POST['email'] ?></td>
        </tr>
        <tr>
            <td>Pohlavie</td>
            <td><?php echo $_POST['pohlavie'] ?></td>
        </tr>
        <tr>
            <td>Koníčky</td>
            <td>
                <?php echo isset($_POST['konicky1']) ? $_POST['konicky1'] :"" ?>
                <?php echo isset($_POST['konicky2']) ? $_POST['konicky2'] :""?>
            </td>
        </tr>
        <tr>
            <td>Štát</td>
            <td><?php echo $_POST['stat'] ?></td>
        </tr>
        <tr>
            <td>Farba</td>
            <td><?php echo $_POST['farba'] ?></td>
        </tr>
        <tr>
            <td>Opis</td>
            <td><?php echo $_POST['opis'] ?></td>
        </tr>
    </tbody>
</table>    

<?php
include "indexFoot.php";
?>