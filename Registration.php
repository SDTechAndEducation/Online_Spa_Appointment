<html>
    <head>
        <title>Aqua- Spa and salon</title>
        
        <meta name="viewport" content="width-device-width , initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/from.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
       
    </head>

    <body>
        <div class="container">
            <div class="navbar">
                <img src="res/navlogo.png" alt="header_logo" class="logo">
                <nav>
                    <ul id="menuList">
                        <li><a class="active" href="Homepage.html">Homepage</a></li>
                        <li><a href="Products.html">Produts</a></li>
                        <li><a href="Login.html">Booking</a></li>
                        <li><a  href="Contact.html">Contact us</a></li>
                        <li><a href="Privacy.html">Privacy & Policy</a></li>
                       
                    </ul>
                </nav>
                <img src="res/nav.png" alt="" class="menu-icon" onclick="togglemenu()">
            </div>  
            <!----------------------------------------------------------------------------------------->
            <script>
                var menuList=document.getElementById("menuList");

                menuList.style.maxHeight="0px";

                function togglemenu(){
                    if( menuList.style.maxHeight=='0px')
                    {
                        menuList.style.maxHeight="200px";
                    }
                    else
                    {
                        menuList.style.maxHeight="0px";
                    }
                }
            </script>
 <!----------------------------------------------------------------------------------------->
            
                <div class="headermain1">
                    <h1>Registration Page</h1>
                </div>

                <!-- <?php
                    if(isset($_SESSION['Status']))
                    {
                        $show=$_SESSION['Status'];
                        echo "$show";
                        unset($_SESSION['Status']);
                    }
                ?> -->

                <div class="form1">
                    <form action="registrationverify.php" method="post">
                        <label for="fname">Full Name</label>
                        <input type="text" id="name" name="Name" placeholder="Your name..">
                    
                        <label for="fname">Email </label>
                        <input type="text" id="email" name="Email" placeholder="">

                        <label for="fname">Phone </label>
                        <input type="tel" id="phone" name="Phone" placeholder="" pattern="[0-9]{10}" required>
                        
                        <label for="fname">Password</label>
                        <input type="password" id="fname" name="Password" placeholder="">
                        <input type="submit" value="Submit">
                        
                      <div class="loginnn">
                        <h3>For login <a href="Login.html">Click here</a></h3>
                    </div>
                      </form>

                     

        </div>

    </body>
</html>