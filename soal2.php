<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="angka">Input Angka : </label>
        <input id="angka" name="angka" type="number">
        <button name="simpan">Simpan</button>
<br>
<br>

<?php
if (isset($_POST['simpan'])) {
    $angka = $_POST['angka'];
    ?>
    <form action="" method="post">
    <label for="angka2">Input : </label> <br>
    <?php for($a=1; $a <= $angka; $a++ ){?>
        <input id="angka2" name="angka2" type="text">
        
        
        <?php   
    }
    ?>


<button name="simpan2">Simpan</button>
</form>
<?php
if(isset($_POST['simpan2'])){
    $angka2 = $_POST['angka2'];

    echo $angka2;
}
?>
<?php   
}
?>
    </form>
</body>

</html>