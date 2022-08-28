<?php
session_start();
?>
<html>
    <head>
        <title>Admin Panel- Dashboard</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width , initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/Table.css">
        <link rel="stylesheet" href="css/alert.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="icon" href="res/tablogo.jpg">
        
    </head>

    <body>
        <div class="container">
            <div class="navbar">
               <img src="res\navlogo.png" alt="header_logo" class="logo">
                <nav>
                    <ul id="menuList">
                        <li><a class="active" href="dashboard.php">Dashboard</a></li>
                        <li><a href="confirm.php">Confirmation Mail</a></li>
                        <li><a href="bookingd.php">Booking details</a></li>
                        <li><a href="../Homepage.html">Log out</a></li>
                    </ul>
                </nav>
                <img src="res\nav.png" alt="" class="menu-icon" onclick="togglemenu()">
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
            </div>
<!-----------------------------MAin body------------------------------------------------------------>

            <div class="headadmin">
                <?php
                    if(isset($_SESSION['status']))
                    {
                        $show=$_SESSION['status'];
                        echo "<div class='alert'>
                        <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span> 
                        <center><strong>'$show'</strong> </center>
                        </div>";
                        unset($_SESSION['status']);
                    }
                ?>
                <h1>Welcome, Admin !</h1>
            </div>
            <div class="partheader">
                    <h1>Registered User details</h1>
            </div>

            <div class="Tabledata" style="overflow-x:auto;">
                
                <table>
                    <tr>
                        <th>ID</th>
                        <th> Name </th> 
                        <th> E-mail </th> 
                        <th> Phone </th> 
                    </tr>
                    <?php

                        $conn= new mysqli('localhost','root','','online_spa');

                        if(!$conn)
                        {
                            die("Sorry we failed to connect :". mysqli_connect_error());
                        }
                        else{
                            
                        }

                        $sql = "SELECT ID, Name, email, Phone from registration";
                        $result= mysqli_query($conn, $sql);
                        $num=mysqli_num_rows($result);

                        if($num!=0)
                        {
                            while($row= mysqli_fetch_assoc($result))
                            {
                                echo "<tr><td>".$row['ID']."</td><td>".$row['Name']."</td><td>".$row['email']."</td><td>".$row['Phone']."</td></tr>";
                            }
                        }

                        ?>
                </table>
            </div>
<!---------------------------Bus details------------------------------------------------------------->
    
        
        </div>

        <!------------------footer design----------------------------------------------->
            <footer class="footer">
                <div class="container1">
                    <div class="row1">
                        

                        <div class="footer-col">
                            <h4>Follow us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <h5 style="color: aliceblue;">Copyright @ 2021-22</h5>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </footer>
       
    </body>
</html>