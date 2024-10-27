<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Occassions</title>


</head>
<style>
    body {
        background-image: url('BG.jpeg');
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>


<body>

    <div class="flex justify-center  bg-no-repeat  bg-cover h-full md:bg-center">
        <div class="flex flex-col items-center ">
            <nav class="self-center w-full max-w-7xl ">
                <div class="flex md:flex-row flex-col justify-between items-center md:items-start border-b-2 border-blue-900">
                    <h1 class=" py-4 text-2xl font-sans font-bold px-10">Occasions</h1>
                    <ul class="flex  items-center text-sm md:text-[18px] font-bold  md:px-10 my-2">
                       
                        <li class="hover:underline underline-offset-4 decoration-2 decoration-cyan-500 py-2 rounded-lg px-2 md:px-5" onclick="occ()">
                            <a href="#">Services</a>
                        </li>
                        <li class="hover:underline underline-offset-4 decoration-2 decoration-cyan-500 py-2 rounded-lg px-2 md:px-5 " onclick="about()" >
                            <a href="#">About Us</a>
                        </li>
                        <li class="hover:underline underline-offset-4 decoration-2 decoration-cyan-500 py-2 rounded-lg px-2 md:px-5" onclick="feedback()">
                            <a href="#">Feedback</a>
                        </li>

                    </ul>

                </div>
            </nav>
            <div class="flex flex-col justify-center items-center text-center  max-w-7xl   my-8 py-4 px-10">
                <h1 class="text-base font-medium tracking-wider ">Welcome</h1>
                <h6>To</h6>
                <span class="underline underline-offset-2 text-gray-700-mt-3"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; </span>
                <div class="flex flex-col text-gray-700mt-5">
                    <h1 class="text-4xl md:text-[50px] font-semibold">OCCASIONS</h1>

                </div>
                <p class="mt-4 text-sm md:w-[52%] tracking-wide leading-7">"Unlock Seamless Event Planning: Your One-Stop Hub for Effortless Event Management!"</p>
                <div class="space-x-3 mt-6 md:mt-4 text-white">
                    <a href="#"> <i class="fa-brands fa-facebook-f bg-blue-600 hover:text-blue-500 hover:bg-white rounded-full px-3 py-[11px] w-9 h-9 text-center "></i>
                    </a>
                    <a href="#"> <i class="fa-brands fa-twitter bg-blue-600 hover:text-red-500 hover:bg-white rounded-full px-[10px] py-[11px] w-9 h-9 text-center"></i>
                    </a>
                    <a href="#"> <i class="fa-brands fa-linkedin bg-blue-600 hover:text-yellow-500 hover:bg-white rounded-full px-3 py-[11px] w-9 h-9 text-center"></i>
                    </a>
                    <a href="#"> <i class="fa-brands fa-chrome bg-blue-600 hover:text-indigo-600 hover:bg-white rounded-full px-[10px] py-[11px] w-9 h-9 text-center"></i>
                    </a>

                </div>
                <div class="flex mt-10 space-x-5">
                    <button class="bg-blue-900 text-white border-2 border-white px-6 py-2 hover:brightness-105 font-semibold" onclick="admin()">
                CUSTOMER</button>
                    <button class="bg-blue-900 text-white border-2 border-white px-6 py-2 hover:brightness-105 font-semibold" onclick="organizer()">
                EVENT ORGANIZER</button>   


                </div>
            </div>
        </div>
    </div>



    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                   
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
                    <span class="ml-3 text-xl">OCCASIONS </span>
                </a>
                <p class="mt-2 text-sm text-gray-500"></p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Wedding Ceremony</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Birthday Party</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Corporate Events</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Live Entertainment</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Educational Event</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">SERVICES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Venue</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Decorations</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Catering Management</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Budgeting</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Event Design</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">LOCATIONS</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Ahmedabad</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Banglore</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Udaipur</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Baroda</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CONTACT US</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">
                                3rd Floor, 305, Pancham Icon,
                                Next to D Mart, Vasna Road,
                                Vadodara, Gujarat 390025, India
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">(+91)95741 97309</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">ocCasions@gmail.com</a>
                        </li>
                       
                    </nav>
                </div>
            </div>
        </div>
        
    </footer>
    
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/290d4f0eb4.js" crossorigin="anonymous"></script>

<script>
    function admin() {
        // Redirect to the admin page 
        window.location.href = "register.php";
    }

    function occ() {
        //redirect to service page
        window.location.href = "practise.php"
    }

    function about(){
        //redirect to about page
        window.location.href = "about2.php"
    }
    function feedback(){
        //redirect to about page
        window.location.href = "feedback.php"
    }
    function organizer(){
        //redirect to about page
        window.location.href = "organizer_register.php"
    }
</script>