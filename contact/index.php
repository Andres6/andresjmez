<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- google font Roboto -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300|Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <!-- jQuery and jQuery UI -->
        <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
        <script   src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"   integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="   crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/flick/jquery-ui.css" /> -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- for site responsiveness -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="keywords" content="andres, jimenez, tenafly, njit, software">
        <meta name="description" content="Personal Web Page of Andres Jimenez">
        <meta name="author" content="Andres Jimenez">
        <link rel="icon" href="../site/media/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="../site/media/favicon.ico" type="image/x-icon">
        <title>Web-page of Andres Jimenez</title>
        
        <!-- Custom styles for site -->
        <link href="../site/css/myStyles.css" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-73977107-1', 'auto');
            ga('send', 'pageview');
        </script>  
    </head>

    <body id="contact">    
        <!-- Full Site -->
        <div class="site-wrapper">

            <!-- Menu Pages list -->
            <div class="pages">
                <ul class="top-menu">
                    <div class="brand">
                    </div>
                    <li><a href="../" id="homeNav">Home</a></li>
                    <li><a href="../about/" id="aboutNav">About</a></li>
                    <li><a href="../contact/" id="contactNav">Contact</a></li>
                    <li><a href="../projects/" id="projectsNav">Projects</a></li>
                    <!-- <li><a href="cs345f14.html">Fall</a></li>  -->
                </ul>
            </div>
            <!-- Main Body of Page -->
            <div class="content">
                <div class="about_heading">
                    <p id="about_name">Andres Jimenez</p>
                    <p id="about_punchline">reach me at my email address below or simply fill out the form and send...</p>
                </div>
                <div class="about_line">
                </div>
                <div class="contact_area">
                    <?php
                        if(isset($_POST['submit'])) {
                            $to = "andresjmez@gmail.com";
                            $from = $_POST['email'];
                            $name = $_POST['name'];
                            $subject = "Hello, I'm " . $name;
                            $message = $_POST['message'];

                            $headers = "From:" . $from;

                            if (mail($to,$subject,$message,$headers)){
                                header('Location: http://www.andresjmez.com/contact/sent.php');
                            } else {
                                echo "Error sending mail, please check all fields and try again";
                            }
                        }
                    ?>
                    <div class="mail_logo">
                        <a href="mailto:andresjmez@gmail.com"><img src="../site/media/mail.png" id="contact_logo"></a> 
                    </div>
                    <p>andresjmez@gmail.com</p>
                    <p>--or--</p>
                    <form id="contactForm" method="post" action="">
                        <label><input type="text" class="contactMe" id="contactMeName" name="name" placeholder="Your Name" required></label>
                        <label><input type="text" class="contactMe" id="contactMeEmail" name="email" type="email" placeholder="Your Email Address" required></label>
                        <label><textarea id="contactMeMessage" name="message" placeholder="Your Message..." required></textarea></label>
                        <input type="submit" id="contactMeSubmit" name="submit" value="Deliver">
                    </form> 
                </div>
            </div>
            <!-- Footer -->
            <div class="mastfoot">
                <div class="footer_name">
                    <div class="social_icons">
                        <ul id="social_list">
                            <li><a href="https://github.com/Andres6" target="_blank" title="GitHub"><img src="../site/media/github_white.png" id="footer_github"/></a></li> 
                            <li><a href="../contact/" title="Contact Me"><img src="../site/media/mail.png" id="footer_contact"/></a></li>
                        </ul>
                    </div>
                    <p>Website designed and built by Andres Jimenez</p>
                    <p id="dev_note">*site under development, more coming soon!<p> 
                </div>
            </div>

        </div>   


        <!-- ============================== -->
        <!-- JQuery and Boostrap Javascript -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <!-- ============================== -->       

    </body>
</html>
