<?php		
    include ("config.php");
    $result = $conn->query('SELECT * FROM person');		
    $count = 0;
    $table =    '<tr>
                    <th>Order</th>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Age</th>
                </tr>';
    while($row = $result->fetch_assoc())
        {
            $count += 1;
             $table .=  '<tr>
                            <td>'.$count.'</td>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['fname'].'</td>
                            <td>'.$row['lname'].'</td>
                            <td>'.$row['age'].'</td>
                        </tr>';
        }

    $conn->close();

    echo $table;
?>