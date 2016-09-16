
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300|Open+Sans:400,300' rel='stylesheet' type='text/css'>

        
        <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
        <script   src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"   integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="   crossorigin="anonymous"></script>
        <link href="jquery-ui.css" rel="stylesheet">
        <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="jquery.validate.js"></script>


        <!-- FIX JQUERY VERSIONSSSSSSSS     -->


        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="keywords" content="andres, jimenez, tenafly, njit, software">
        <meta name="description" content="Personal Web Page of Andres Jimenez">
        <meta name="author" content="Andres Jimenez">
        <link rel="icon" href="../../site/media/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="../../site/media/favicon.ico" type="image/x-icon">
        <title>Web-page of Andres Jimenez</title>

        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        
        <!-- Custom styles for site -->
        <link href="../../site/css/myStyles.css" rel="stylesheet">
        
        
        
        
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

    <body id="projects">    
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
                    <li><a href="../../" id="homeNav">Home</a></li>
                    <li><a href="../../about/" id="aboutNav">About</a></li>
                    <li><a href="../../contact/" id="contactNav">Contact</a></li>
                    <li><a href="../../projects/" id="projectsNav">Projects</a></li>
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
                <div id="dogAge_heading">
                    <p id="dogAge_name">Dog Age Calculator</p>
                    <p id="dogAge_punchline">find out how old your dog really is...</p>
                </div>
                <div id="dogAge_line">
                </div>
                <div id="dogAgeContent">
                    <p></p>
                    <div id="dogAgeCalcDiv">
                        <div id="dogFormDiv">
                            <form id="getDogInfo">
                                <fieldset id="radioSet">
                                    <div id="dogSizeError"></div>
                                    <legend class="dogCalcHeadings">Select your pup's size</legend><br>
                                    <input type="radio" id="dogSmall" name="dogAgeRadio" value="1" required><label for="dogSmall">small<br><small>0-20 lbs.</small></label>
                                    <input type="radio" id="dogMedium" name="dogAgeRadio" value="2" required><label for="dogMedium">medium<br><small>21-50 lbs.</small></label>
                                    <input type="radio" id="dogLarge" name="dogAgeRadio" value="3" required><label for="dogLarge">large<br><small>51-90 lbs.</small></label>
                                    <input type="radio" id="dogXLarge" name="dogAgeRadio" value="4" required><label for="dogXLarge">x-large<br><small>90+ lbs</small></label>
                                </fieldset>
                                <div id="humanAgeError"></div>
                                <label for="humanAge" class="dogCalcHeadings">Enter pup's age in human years</label><br>
                                <input class="ageInput" id="humanAge" name="humanAge" type="text" maxlength="4" required><br>
                                <button class="dogAgeButton" type="button">Woof!</button>
                            </form>
                            <div id="ageResult">
                                <p>Your dog is</p>
                                <p id="answer"></p>
                                <p>Years old</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div class="mastfoot">
                 <div class="footer_name"> 
                     <div class="social_icons"> 
                         <ul id="social_list"> 
                             <li><a href="https://github.com/Andres6" target="_blank" title="GitHub"><img src="../../site/media/github_white.png" id="footer_github"/></a></li>  
                             <li><a href="../../contact/" title="Contact Me"><img src="../../site/media/mail.png" id="footer_contact"/></a></li> 
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
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="dog.js"></script>
        <!-- ============================== -->       

    </body>
</html>
