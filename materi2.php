<form method="POST">
    Masukkan Angka : <input type="number" name="angka">
    <input type="submit" name="kirim" value="kirim">
</form>

    <?php
        if(isset($_POST['angka'])){
            $neWAngka = $_POST['angka'];
            for($i = 1; $i <= $neWAngka; $i++){
                echo "ini angka $i <br>";
            }
        }
    ?>
