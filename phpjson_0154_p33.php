<?php
    $connect = mysqli_connect("localhost","root","","dbexid63410154");
    $filename = "employee.json";
    $data = file_get_contents($filename);
    $array = json_decode($data, true);
    foreach($array as $row)
    {
    $sql = "INSERT INTO employee (id, name, gender, designation)
    VALUES('".$row["id"]."','".$row["name"]."','".$row["gender"]."','
    ".$row["designation"]."')";
    mysqli_query($connect,$sql);
    }
    echo "Employee data inserted";
?>