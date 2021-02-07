<?php 

include("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Students List</h1>

    <table>
<thead>
    <th>firstName</th>
    <th>lastName</th>
    <th> email</th>
</thead>
<tbody>


<?php

$query="select * from students order by id asc";
$result=mysqli_query($conn,$query);

while($resultstore=mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>".$resultstore['f_name']."</td>";
    echo "<td>".$resultstore['l_name']."</td>";
    echo "<td>".$resultstore['email']."</td>";
    echo "<tr>";
}

?>


</tbody>

    </table>
</body>
</html>