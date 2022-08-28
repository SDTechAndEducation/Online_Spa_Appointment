<html>
    <head>
        <title>Admin Panel- History </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width , initial-scale=1">
        <link rel="stylesheet" href="css/homepage.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/Table.css">
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
                        <li><a href="history.php">History</a></li>
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
                 <!----------------------------------------------------------------------------------------->
            </div>

            <div class="headmain">
                <h1>History </h1>
            </div>

            <div class="Tabledata2">
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                    </tr>
                    <?php
                        $conn=new mysqli('localhost','root','','online_spa');

                        if(!$conn)
                        {
                            echo "There is connection issues";
                        }
                        else{
                            $stmt="SELECT * FROM history ORDER by ID";
                            $data=mysqli_query($conn, $stmt);
                            $num=mysqli_num_rows($data);

                            if($num>0)
                            {
                                while($row=mysqli_fetch_assoc($data))
                                {
                                    echo "<tr><td>".$row['Date']."</td><td>".$row['Time']."</td></tr>";
                                }
                               
                            }
                        }

                    ?>
                </table>
                
            </div>
        
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