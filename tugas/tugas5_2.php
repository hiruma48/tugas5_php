<!DOCTYPE html>
<html>
<head>
    <title>Contoh Tabel PHP</title>
</head>
<body>
    <h1>Operator String</h1>
    <table border="1">
        <tr>
            <th>Input 1</th>
            <th>Input 2</th>
            <th>Hasil</th>
        </tr>
        <?php
        // Simulasikan data dari database atau sumber data lainnya
        $data = array(
            array('Input 1' =>"Ayo", 'Input 2' => " Belajar", 'Hasil' => 30),
            array('Input 1' => "Bersama", 'Input 2' => ' Niomic', 'Hasil' => 25),
        );

        // Menggunakan perulangan untuk mengisi data ke dalam tabel
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['Input 1'] . "</td>";
            echo "<td>" . $row['Input 2'] . "</td>";
            echo "<td>" . $row['Input 1'] . $row['Input 2'] ."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
