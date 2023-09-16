<!DOCTYPE html>
<html>
<head>
    <title>Tabel PHP</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Input true</th>
            <th>Input 2</th>
            <th>AND</th>
            <th>OR</th>
        </tr>
        <?php
        // Simulasikan data dari database atau sumber data lainnya
            echo"<p>table logika</p>";
        $data = array(
            array('Input true' => "false" , 'Input 2' => 'false', 'AND' => printf(false&&false),'OR' => printf(false||false) ),
            array('Input true' => "false", 'Input 2' => 'true', 'AND' => printf(false&&true) ,'OR' => printf(false||true) ),
            array('Input true' => "true", 'Input 2' => 'false', 'AND' => printf(true&&false),'OR' => printf(true||false) ),
            array('Input true' => "true", 'Input 2' => 'true', 'AND' => printf(true&&true),'OR' => printf(true||true) ),
        );

        // Menggunakan perulangan untuk mengisi data ke dalam tabel
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $row['Input true'] . "</td>";
            echo "<td>" . $row['Input 2'] . "</td>";
            echo "<td>" . $row['AND'] . "</td>";
            echo "<td>" . $row['OR'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>