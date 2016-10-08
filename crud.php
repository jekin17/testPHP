<table width="50%"   align = "center" >
    <tr><td>Id</td><td>Fname</td><td>Lname</td><td>Age</td><td>Phone</td></tr>

</table>
<?php

$pid = $_GET['pid'];
$pfname = $_GET['pfname'];
$plname = $_GET['plname'];
$page = $_GET['page'];
$pphone = $_GET['pphone'];
$operation  = $_GET['rb'];
if($operation == "1")
{
    $conn = new mysqli('localhost', 'root', 'Motox', 'lora');
    $sql = "INSERT INTO person (id, fname, lname, age, phone) values ($pid, '$pfname', '$plname', $page, $pphone)";
    $conn->query($sql);
    $result = $conn->query('SELECT * from person');
    while($row = $result->fetch_assoc())
    {
        echo "<table width=\"50%\" align = \"center\">"."<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["phone"]."</td></tr>"."</table>"."<p></p>";
    }
}
else if($operation == "2")
{
    $conn = new mysqli('localhost', 'root', 'Motox', 'lora');
    $result = $conn->query('SELECT * from person');
    while($row = $result->fetch_assoc())
    {
        echo "<table width=\"50%\" align = \"center\">"."<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["phone"]."</td></tr>"."</table>"."<p></p>";
    }
}
else if($operation == "3")
{
    $conn = new mysqli('localhost', 'root', 'Motox', 'lora');
    $sql = "UPDATE person SET fname='$pfname', lname='$plname', age=$page,phone= $pphone WHERE id= $pid";
    $conn->query($sql);
    $result = $conn->query('SELECT * from person');
    while($row = $result->fetch_assoc())
    {
        echo "<table width=\"50%\" align = \"center\">"."<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["phone"]."</td></tr>"."</table>"."<p></p>";
    }
}
else if($operation == "4")
{
    $conn = new mysqli('localhost', 'root', 'Motox', 'lora');
    $sql = "DELETE from person WHERE id = $pid lIMIT 1";
    $conn->query($sql);
    $result = $conn->query('SELECT * from person');
    while($row = $result->fetch_assoc())
    {
        echo "<table width=\"50%\" align = \"center\">"."<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["phone"]."</td></tr>"."</table>"."<p></p>";
    }
}
?>