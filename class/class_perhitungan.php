<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perhitungan</title>
</head>

<body>

    <form action="" method="post">
        <table>
            <tr>
                <td>masukan panjang</td>
                <td>:</td>
                <td><input type="text" name="panjang"></td>
            </tr>
            <tr>
                <td>masukan lebar</td>
                <td>:</td>
                <td><input type="text" name="lebar"></td>
            </tr>

            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="hitung" value="Hitung">
                </td>
            </tr>

        </table>
    </form>

    <?php

class perhitungan
{
    public $bilangan1;
    public $bilangan2;
    public $bilangan3;

    public function luasPersegi($bilangan1, $bilangan2)
    {
        $bilangan3 = $bilangan1 * $bilangan2;
        echo "panjang = $bilangan1" . "<br>";
        echo "lebar = $bilangan2" . "<br>" . "Rumus : " . "<br>";
        echo " L = a x t" . "<br>" . "$bilangan1 x $bilangan2 = ";
        return "hasil dari luas persegi adalah : " . $bilangan3;
    }

    public function LuasPersegiPanjang($bilangan1, $bilangan2)
    {
        echo "contoh :" . "<br>";
        $bilangan3 = $bilangan1 * $bilangan2;
        echo "panjang = $bilangan1" . "<br>";
        echo "lebar = $bilangan2" . "<br>" . "Rumus : " . "<br>";
        echo " L = a x t" . "<br>" . "$bilangan1 x $bilangan2 = ";
        return "hasil dari luas persegi panjang adalah : " . $bilangan3 . "<br>" . "<br>";

    }

    public function LuasSegitiga($bilangan1, $bilangan2)
    {
        $bilangan3 = $bilangan1 * $bilangan2 / 2;
        echo "alas = $bilangan1" . "<br>";
        echo "tinggi = $bilangan2" . "<br>" . "rumus : " . "<br>";
        echo "L = 1/2 x a x l " . "<br>" . "1/2 x 5 x 20 = ";
        return "hasil dari luas segitiga adalah : " . $bilangan3;
    }
}
?>

</body>

</html>
