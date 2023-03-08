<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2c</title>
    <style>
        td{
            width: 30px;
            height: 30px;
            background-color: #7bc66b;
            border: 1px solid black;
            text-align:center;
        }
    </style>
</head>
<body>
    <table cellpadding="10" cellspacing="0">
        <?php 

        $baris = 1;

        for ($nomor = 10; $nomor >= $baris; $nomor--) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= $nomor; $kolom++) {
                echo "<td>$kolom</td>";
            }
            echo "</tr>";
        }
        ?>
        </table>
    </body>
</html>