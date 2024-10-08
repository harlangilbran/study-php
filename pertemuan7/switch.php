<form  method="post">
<input type="text" name="hari">
<button type="submit">cek nama hari</button>
</form>

<?php
if (isset($_POST['cek'])) {
    // var_dump($_POST);
$hari = $_POST['hari'];
switch ($hari) {
    case 'senin':
        echo "ada";
        break;
    case 'selasa':
        echo "ada";
        break;
    case 'rabu':
        echo "ada";
        break;
    case 'kamis':
        echo "ada";
        break;
    case 'jumat':
        echo "ada";
        break;
    case 'sabtu':
        echo "ada";
        break;
    case 'minggu':
        echo "ada";
        break;
        default;
        echo "tidak ada dalam case";

}

}



?>