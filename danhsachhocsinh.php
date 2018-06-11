<?php
    include "connectdatabase.php";

    $getdatabase = "SELECT * FROM `hocsinh`";
    $query = mysqli_query($connect, $getdatabase);

?>

<html>

<head>
</head>

<body>
    <table border="1px">

        <tr>
            <td>id</td>
            <td>ten</td>
            <td>tuoi</td>
            <td>gioitinh</td>
            <td>sothich</td>
        </tr>
        <?php
            while($ketqua = mysqli_fetch_assoc($query)){
                print "<tr>";
                print "<td>" . $ketqua["id"] . "</td>";
                print "<td>" . $ketqua["ten"] . "</td>";
                print "<td>" . $ketqua["tuoi"] . "</td>";
                print "<td>" . $ketqua["gioitinh"] . "</td>";
                print "<td>" . $ketqua["sothich"] . "</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>

