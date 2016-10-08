 <?php
    $conn = new mysqli('localhost', 'root', 'Motox', 'lora');
    $sql = "insert into person (id, fname, lname, age, phone) values (2, 'Joh', 'Doe', 45, 503400051)";
    $conn->query($sql);
  ?>
