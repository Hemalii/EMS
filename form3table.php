 <!-- PHP code to fetch and display customer database -->
 <?php

// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM form3";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<table>
<tr>
        <th>Email</th>
        <th>Event Type</th>
        <th>Event Budget</th>
        <th>Date</th>
        <th>Additional Services</th>
        
    </tr>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
           <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['event_type']; ?></td>
            <td><?php echo $row['event_budget']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['additional_service']; ?></td>
            
           
        </tr>
    <?php endwhile; ?>
</table>
            </ul>
        </div>
        </div>
        
    <style> 
table {
  table-layout: fixed;
  width: 1000px;
  border: 3px solid black;
  margin: 0 auto; 
}

td {
  border: 3px solid black;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}



</style> 