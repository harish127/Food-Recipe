    <?php
    $alert= false;
    $message='';
	  if(!empty($_POST["send"])){
		$name = $_POST["Name"];
		$email = $_POST["Email"];
		$subject = $_POST["subject"];
		$content = $_POST["content"];

		$toEmail ="Staff@Internationalfood.com";
		$mailHeaders ="From: " .$name. "<" .$email .">\r\n";
		if(@mail($toEmail, $subject, $content, $mailHeaders)){
        $alert=true;
        
		}else
        {
        //alert for error
        $alert=false;

        //echo "Error Submiting the form!.";
        }
	  }
	  ?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Food</title>

        <link rel="stylesheet" href="style.css" />
        <!-- Load icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <header>
            <a href="#" class="logo">Food<span>.</span></a>
            <ul class="navigation">
                <li>
                    <a href="./index.php#banner">Home</a>
                </li>
                <li>
                    <a href="#./index.phpabout">About</a>
                </li>
                <li>
                    <a href="./index.php#menu">Menu</a>
                </li>
                <li>
                    <a href="./index.php#expert">Expert</a>
                </li>
                <li>
                    <a href="./index.php#testimonials">Testimonials</a>
                </li>
                <li>
                    <a href="./index.php#contact">Contact</a>
                </li>
            </ul>
        </header>

        <div style="height:600px;">
        <?php
        if($alert){
        echo'
          <section class="contact" id="contact">
            <div class="title">
                <h2 class="titleText">Your <span>C</span>ontact Us Form Submission is Sucessful!</h2>
                <p>We have recived your request sucessfully, <a style="text-decoration:none;" href="./index.php">Click Here</a> to go back to Homepage.</p>
        </section>';
        }else {
                echo'
               <section class="contact" id="contact">
            <div class="title">
                <h2 class="titleText">Your <span>C</span>ontact Us Form Submission Failed!</h2>
                <p>Something went wrong during processing your request, Please  <a style="text-decoration:none;" href="./index.php#contact">Click Here</a> to Try Again.</p>
        </section>';
        }
        ?>
        </div>
         <footer>
        <!-- for copyright -->
        <div class="copyrightText">
            <p>Copyright 2021 <a href="#">Institute Of Technolgy Korba</a>.All right Reserved</p>
        </div>

         </footer>
        







        <script type="text/javascript">
            // for making sticky nav scrolling
            window.addEventListener("scroll", function() {
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });

            // Open the full screen search box
            function openSearch() {
                document.getElementById("myOverlay").style.display = "block";
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="main.js"></script>
    </body>

    </html>