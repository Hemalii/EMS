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
            <h1>Dashboard</h1>

        </div>
        <div class="sidebar">
            <button class="tablinks" onclick="organizer_form()">Add Events</button>
            <button class="tablinks" onclick="add()">Destination Wededing</button>
            <button class="tablinks" onclick="add1()">Partial Wedding</button>
            <button class="tablinks" onclick="add2()">Corporate Events</button>
            <button class="tablinks" onclick="add1()">Birthday Parties</button>
            <button class="tablinks" onclick="add1()">Live Entertainment</button>
            
        </div>
       
        <!--<div>
            <button onclick="add()" class="btn">Destination Wedding Planning</button>
        </div>
       <div>
            <button onclick="add1()" class="btn">Partial Wedding</button>
        </div>
        <div>
            <button onclick="add2()" class="btn">Corporate Events</button>
        </div>
        <div>
            <button onclick="add3()" class="btn">Birthday Parties</button>
        </div>
        <div>
            <button onclick="add4()" class="btn">Live Entertainment</button>
        </div>-->
       
            <ol>
               
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
        function organizer_form(){
                //redirect to organization_form
                window.location.href = "organizer_form.php"
            }
        function add(){
                //redirect to form1
                window.location.href = "form1table.php"
        }
        function add1(){
                //redirect to form2
                window.location.href = "form2table.php"
        }
        function add2(){
            //redirect to foem3
            window.location.href = "form3table.php"
        }
        function add3(){
            //redirect to form2
            window.location.href = "form2table.php"
        }
        function add4(){
            //redirect to form3
            window.location.href = "form3table.php"
        }
        </script>

</body>
</html>