<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <form action="" method="POST">
        <label for="number">
            input :
        </label>
        <input type="number" name="number" id="number">
        <button name="simpan">simpan</button>
    </form>

</body>

</html>

<?php
if (isset($_POST['simpan'])) {
    $number = $_POST['number'];

    if ($number) {
        # code...
    }
}


?>