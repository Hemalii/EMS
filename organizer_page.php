<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer Page</title>
    <link rel="stylesheet" href="organizer_page.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Organizer Dashboard</h1>

        </div>
        <div class="sidebar">
            <button class="tablinks" onclick="openTab(event, 'events')">Events</button>
            <button class="tablinks" onclick="openTab(event, 'customers')">Customers</button>
        </div>

        <div id="events" class="tabcontent">
            <h2>Previously Added Events</h2>
            <ul>
                <!-- PHP code to fetch and display previously added events -->
                <?php
                    
                    $events = array("Event 1", "Event 2", "Event 3");
                    foreach ($events as $event) {
                        echo "<li>$event</li>";
                    }
                ?>
            </ul>
            <button onclick="add()" class="btn">Add Event</button>
        </div>

        <div id="customers" class="tabcontent">
            <h2>Customer Database</h2>
            <ul>
                <!-- PHP code to fetch and display customer database -->
                <?php
                   // Include your PHP code to fetch data from form1 table in the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "mini";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from form1 table
            $sql = "SELECT * FROM form1";
            $result = $conn->query($sql);

            // Check if there are any rows in the result
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    // Display the data within the HTML structure
        ?>
        <tr>
            <td><?php echo $row["destination"]; ?></td>
            <td><?php echo $row["event_budget"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
            <td><?php echo $row["style_preference"]; ?></td>
            <td><?php echo $row["additional_service"]; ?></td>
            <!-- Add more columns as needed -->
        </tr>
        <?php
                }
            } else {
                echo "<tr><td colspan='2'>0 results</td></tr>";
            }
            $conn->close();
        ?>
    </table>
                ?>
            </ul>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Initially hide all tab contents except the first one
        document.getElementById("events").style.display = "block";

        function changeBgColor(color) {
            document.body.style.backgroundColor = color;
        }
        function add(){
            //redirect to about page
            window.location.href = "organizer_form.php"
        }

        function add2(){
            //redirect to about page
            window.location.href = "organizer_form.php"
        }
        function add3(){
            //redirect to about page
            window.location.href = "organizer_form.php"
        }
        function add4(){
            //redirect to about page
            window.location.href = "organizer_form.php"
        }
    </script>
</body>
</html>
