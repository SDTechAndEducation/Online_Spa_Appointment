<html>
    <head>
        <title>Admin Panel- History </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width , initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="stylesheet" href="css/Table.css">
        <link rel="stylesheet" href="../css/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="icon" href="res/tablogo.jpg">
        
    </head>

    <body>
        <div class="container">
            <div class="navbar">
                <img src="res\navlogo.png" alt="header_logo" class="logo">
                <nav>
                    <ul id="menuList">
                        <li><a  href="dashboard.php">Dashboard</a></li>
                        <li><a class="active"href="confirm.php">Confirmation Mail</a></li>
                        <li><a href="bookingd.php">Booking details</a>
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

            <div class="headmain11">
                <h1>Confirm the Appointment</h1>
            </div>

            <?php
                    //first we leave this input field blank
                    $recipient = "";
                    //if user click the send button
                    if(isset($_POST['send'])){
                        //access user entered data
                       $recipient = $_POST['email'];
                       $subject = $_POST['subject'];
                       $message = $_POST['message'];
                       $sender = "From: shahiprem7890@gmail.com";
                       //if user leave empty field among one of them
                       if(empty($recipient) || empty($subject) || empty($message)){
                           ?>
                           <!-- display an alert message if one of them field is empty -->
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!" ?>
                            </div>
                           <?php
                        }else{
                            // PHP function to send mail
                           if(mail($recipient, $subject, $message, $sender)){
                            ?>
                            <!-- display a success message if once mail sent sucessfully -->
                            <div class="alert">
                                <!--<?php echo "Your mail successfully sent to $recipient"?>-->
                            </div>
                           <?php
                           $recipient = "";
                           }else{
                            ?>
                            <!-- display an alert message if somehow mail can't be sent -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
                           <?php
                           }
                       }
                    }
                ?> <!-- end of php code -->

                    <div class="form1">
                <form action="confirm.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="5" class="form-control textarea" name="message" placeholder="Compose your message.."></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control button btn-primary" type="submit" name="send" value="Send" placeholder="Subject">
                    </div>
                </form>
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