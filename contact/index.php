<!DOCTYPE html>
<html lang="en">
    <head>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300|Open+Sans:400,300' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="keywords" content="andres, jimenez, tenafly, njit, software">
        <meta name="description" content="Personal Web Page of Andres Jimenez">
        <meta name="author" content="Andres Jimenez">
        <link rel="icon" href="../site/media/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="../site/media/favicon.ico" type="image/x-icon">
        <title>Web-page of Andres Jimenez</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        
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
            
            <!-- Top of Site / Header -->
            <div class="header">
                <div class="masthead-brand">
                </div>
            </div>

            <!-- Menu Pages list -->
            <div class="pages">
                <ul class="nav masthead-nav">
                    <div class="brand">
                    </div>
                    <li><a href="../" id="homeNav">Home</a></li>
                    <li><a href="../about/" id="aboutNav">About</a></li>
                    <li><a href="../contact/" id="contactNav">Contact</a></li>
                    <li><a href="../portfolio/" id="portfolioNav">Portfolio</a></li>
                    <!--
                    <li><a href="cs345f14.html">Fall</a></li>  -->
                </ul>
            </div>
            
            <!-- Main Body of Page -->
            <!--<div class="inner cover">
                <p class="cover-heading">Welcome</p>
                <p class="cover-heading">Website under development</p>
                <p class="cover-heading">Coming soon</p>
            </div> -->
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
                                header('Location: http://www.andresjmez.com/contact/');
                                echo "You message has been sent.";
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
                    <form method="post" action="">
                        <input name="name" placeholder="Your Name" required>
                        <input name="email" type="email" placeholder="Your Email Address" required>
                        <textarea name="message" placeholder="Your Message..." required></textarea>
                        <input id="submit" name="submit" type="submit" value="Deliver">
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
                    <p id="dev_note">*site under development, check back soon!<p> 
                </div>
            </div>

        </div>   


        <!-- ============================== -->
        <!-- JQuery and Boostrap Javascript -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <!-- ============================== -->       

    </body>
</html>
