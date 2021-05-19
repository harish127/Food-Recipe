 <?php
    $alert=false;
    $jsondata="";
    if(!empty($_GET["v"])){
    $querry = $_GET["v"];
    $start= fopen("https://www.themealdb.com/api/json/v1/1/filter.php?c=".$querry." ", "r");
    $rawdata=stream_get_contents($start);
    fclose($start);
    $jsondata = json_decode($rawdata);
    if($jsondata->meals==null){
        $jsondata="";
    }
    }
    else{
    $alert= true;
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

        <link rel="stylesheet" href="style-sec.css" />
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



         <section class="banner" id="banner" data-aos="zoom-out-up" data-aos-duration="2500">
         <h2 >Viewing Catogery <?php echo @$querry; ?> </h2> 
          <?php
           echo '<h3>Found '.@count($jsondata->meals).' Recipes</h3>' ;?>


        </section>

         <section class="items" id="menu">

            <div class="title" >
                <h2 class="titleText"  data-aos="fade-up"
     data-aos-duration="2500">Our<span>M</span>enu</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

        <div class="content "  data-aos="zoom-in-up" data-aos-duration="2500">
                <?php
                if ($jsondata != '') {
                    foreach ($jsondata->meals as $item) {
                        //To display every item recive from json file
                        echo '<div class="box ">
                    <div class="imgBx">
                    <div class="img-hover-zoom--quick-zoom ">
                    <a id="foodlink" href="./show.php?id='.$item->idMeal.'" >
                         <img src="' . $item->strMealThumb . '" alt="">
                         </div>
                    </div>
                    <div class="text">
                        <h3>' . $item->strMeal . '</h3>
                     </a>
                        </div>
			
                  </div>';
                    }
                } else {
                    echo '<h2>Error Items Not Found <a href="./index.php#menu">Click Here</a> to go back</h2>'; //can be edited
                }

                ?>

            </div>
        </section>

         <footer>
        <!-- for copyright -->
        <div class="copyrightText">
            <p>Copyright 2021 <a href="#">Institute Of Technolgy Korba</a>.All right Reserved</p>
        </div>
            
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