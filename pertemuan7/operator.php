<fieldset>
    <legend>operator aritmatika & percabangan</legend>
    <form method="post">
        <input type="text" name="nilai1" placeholder="Nilai 1">
        <input type="text" name="nilai2" placeholder="Nilai 2">
        <fieldset>
            <legend>oerator</legend>
            <label for="tambah">
                <input type="radio" id="tambah" name="operator" value="tambah">
                tambah (+)
                <input type="radio" id="kurang" name="operator" value="kurang">
                kurang (-)
                <input type="radio" id="kali" name="operator" value="kali">
                kali (*)
                <input type="radio" id="bagi" name="operator" value="bagi">
                bagi (/)
                <input type="radio" id="modulus" name="operator" value="modulus">
                bagi (%)
            </label>
        </fieldset>
        <br>
        <button type="submit" name="hitung">Hitung</button>
        
    </form>
    <fieldset>
            <legend>Hasil perhitungan</legend>
            <?php
            if (isset($_POST['hitung'])) {
                // print_r($_POST);
                $nilai1 = $_POST['nilai1'];
                $nilai2 = $_POST['nilai2'];
                $operator = $_POST['operator']; //=-/*%
                // jalankan dengan operator
                if ($operator=='tambah') {
                    $hasil = $nilai1+$nilai2;
                    echo "penjumlahan : " .$hasil;
                }else if ($operator=='kurang') {
                    $hasil = $nilai1-$nilai2;
                    echo "pengurangan : " .$hasil;
                }else if ($operator=='kali') {
                    $hasil = $nilai1*$nilai2;
                    echo "perkalian : " .$hasil;
                }else if ($operator=='bagi') {
                    $hasil = $nilai1/$nilai2;
                    echo "pembagian : " .$hasil;
                }else if ($operator=='modulus') {
                    $hasil = $nilai1%$nilai2;
                    echo "sisa bagi : " .$hasil;
                }else{
                    echo "tidak ada operator";
                }
            }
            
            ?>

        </fieldset>
</fieldset>