<form action="proses.php" method="post">
    <table>
        <tr>
            <td>angka 1</td>
            <td>: <input type="text" name="angka1"></td>
        </tr>
        <tr>
            <td>Operator</td>
            <td>
                <input type="radio" name="operator" value="plus">+
                <input type="radio" name="operator" value="min">-
                <input type="radio" name="operator" value="times">x
                <input type="radio" name="operator" value="divide">/
                <input type="radio" name="operator" value="modulus">%
            </td>
        </tr>
        <tr>
            <td>angka 2</td>
            <td><input type="text" name="angka2"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="hitung"></td>
            <td><input type="reset" name="reset" value="reset"></td>
        </tr>
    </table>
</form>