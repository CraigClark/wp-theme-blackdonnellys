<?php 
    include("./php-scripts/handle-calendar.php");
?>
<!DOCTYPE html>

<html lang="en-ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Technology that changed the world</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/5617227139.css" type="text/css">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
</head>

<body>
    <div class="wrapper">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>

                    <li><a href="#">Contact</a></li>

                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
        </header>
    </div><!-- / wrapper -->

    <div class="branding">
        <div class="wrapper">
            <blockquote>
                <p>We live in a society exquisitely dependent on science and technology, in which hardly anyone knows anything about science and technology.<br>
                <em>-Carl Sagan</em></p>
            </blockquote>
        </div>
    </div>

    <div class="wrapper">
        <div class="content-box">
            <form>
                <fieldset>
                    <legend>Technology that changed the world</legend> <?php 
                                                                // Print drop-downs here 
                                                                printCalendar();
                                                            ?>

                    <div class="form-box">
                        <input type="submit" name="send" id="send" value="Send">
                    </div>
                </fieldset>
            </form><?php 
                                        // Print errors/feedback/dynamic content
                                        evaluate();
                                        
                                    ?>
        </div>
    </div><!-- / wrapper -->

    <div class="full-width">
        <div class="wrapper">
            <footer>
                <div class="copyright-notice">
                    &copy; Craig Clark
                </div>

                <div class="social-links">
	                <ul>
                     <li><a href="https://vimeo.com/"><i class="fa fa-vimeo" aria-hidden="true"></i><span>Vimeo</span></a></li>
                     
                     <li><a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i><span>Google +</span></a></li>
                     
                     <li><a href="https://github.com/CraigClarkAlgonquin"><i class="fa fa-github-alt" aria-hidden="true"></i><span>Github</span></a></li>
                     
                     <li><a href="https://www.behance.net/"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a></li>
                  </ul>
                </div>
            </footer>
        </div>
    </div><!-- / wrapper -->
</body>
</html>
