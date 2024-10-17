<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2></h2>
        <table>
            <form method="post" action="proses_form.php">
                <tr>
                    <td style="margin: auto;"><b>biodata</b></td>
                    
                </tr>
                <tr>
                    <td>nama lengkap :</td>
                    <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>NIM :</td>
                    <td><input type="text" name="nim" id=""></td>
                </tr>
                <tr>
                    <td>tanggal lahir :</td>
                    <td>
                        <select name="tgl" id="">
                            <?php 
                            for($i=1;$i<31;$i++){
                            echo "<option value=$i>$i</option>";}?>
                        </select>
                        <select name="bln" id="">
                            <option value="1">jan</option>
                            <option value="1">feb</option>
                            <option value="1">mar</option>
                            <option value="1">apr</option>
                            <option value="1">mei</option>
                            <option value="1">jun</option>
                            <option value="1">jul</option>
                            <option value="1">agu</option>
                            <option value="1">sep</option>
                            <option value="1">okt</option>
                            <option value="1">nov</option>
                            <option value="1">des</option>
                        </select>
                        <select name="thn" id="">
                        <?php 
                            for($i=1980;$i<=2017;$i++){
                            echo "<option value=$i>$i</option>";}?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td><textarea name="alamat" id="" cols="21" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td><input type="radio" name="kel" value="laki-laki" id="">laki
                <input type="radio" name="kel" value="perempuan" id="">perempuan</td>
                </tr>
                <tr>
                    <td>==user account==</td>
                </tr>
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>email :</td>
                    <td><input type="text" name="email" id=""></td>
                </tr>
                <tr>
                    <td>password :</td>
                    <td><input type="text" name="password" id=""></td>
                </tr>
                <tr>
                    <td>ulangi :</td>
                    <td><input type="text" name="repass" id=""></td>
                </tr>
                <tr>
                    <td><b>Paket Kursus</b></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="target1" value="HTML">Paham html</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="target2" value="CSS">paham css</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="target1" value="PHP">paham php</td>
                </tr>
                <tr>
                    <td><input type="submit" value="senddata" id=""></td>
                </tr>
            </form>
        </table>
    </center>

</body>
</html>