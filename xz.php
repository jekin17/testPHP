<table>
    <tr><th>Id</th><th>Fname</th><th>Lname</th><th>Age</th><th>Phone</th></tr>
    <?php
    $conn = new mysqli('localhost', 'root', 'Motox', 'lora');
    $result = $conn->query('SELECT * from person');
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["age"]."</td><td>".$row["phone"]."</td></tr>";
    }
   
  ?>
</table>