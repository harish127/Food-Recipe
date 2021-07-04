<!-- do not edit --> 
<?php
    $alert=false;
    $jsondata="";
    $thumb="";
    $ytube="";
    $fname="";
    $inst="";
    $ind="";
    $catg="";
    $area="";
    $tag="";
    $source="";
    if(!empty($_GET["id"])){
    $querry = $_GET["id"];
    $start= fopen("https://www.themealdb.com/api/json/v1/1/lookup.php?i=".$querry." ", "r");
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
//var_dump($jsondata);
//echo $jsondata->[0];
    ?>
<!--  php file -->

<!DOCTYPE html>
    <html lang="en">

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Food</title>

        <link rel="stylesheet" href="style4.css" />
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


        <!-- /////banner -->

        
        <section class="banner" id="banner" data-aos="zoom-out-up" data-aos-duration="2500">
            <div class="content">
                
        <div style="height:200px;">
        
        
        </div>
        </section>


<!-- ////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <!-- <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p> -->



              <!-- Receipe Content Area -->
<?php 

if ($jsondata != '') {
                    foreach ($jsondata->meals as $item) {
$thumb = $item->strMealThumb;
$ytube = $item->strYoutube;
$fname = $item->strMeal;
$inst=$item->strInstructions;
$ind = array($item->strMeasure1 ." ". $item->strIngredient1 ,$item->strMeasure2 ." ". $item->strIngredient2,$item->strMeasure3 ." ". $item->strIngredient3, $item->strMeasure4 ." ". $item->strIngredient4,$item->strMeasure5 ." ".$item->strIngredient5,$item->strMeasure6 ." ".$item->strIngredient6,$item->strMeasure7 ." ".$item->strIngredient7,$item->strMeasure8 ." ".$item->strIngredient8,$item->strMeasure9 ." ".$item->strIngredient9, $item->strMeasure10 ." ". $item->strIngredient10, $item->strMeasure11 ." ". $item->strIngredient11, $item->strMeasure12 ." ". $item->strIngredient12, $item->strMeasure13 ." ". $item->strIngredient13, $item->strMeasure14 ." ". $item->strIngredient14, $item->strMeasure15 ." ". $item->strIngredient15, $item->strMeasure16 ." ". $item->strIngredient16, $item->strMeasure17 ." ". $item->strIngredient17, $item->strMeasure18 ." ". $item->strIngredient18, $item->strMeasure19 ." ". $item->strIngredient19,$item->strMeasure20 ." ". $item->strIngredient20);
$catg= $item->strCategory;
$area= $item->strArea;
$tag= $item->strTags;
$source=$item->strSource;
}
}            
?>
   <div class="receipe-content-area">
	<div class="container">

                <div class="row">

                    
                <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("<?php echo $thumb; ?>");'>
            <a href="<?php echo $ytube; ?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

                    <div class="col-12 col-md-8">


                    
              
                        <div class="receipe-headline my-5">
                            <span>june 25, 2021</span>
                             <h2><?php echo $fname; ?></h2>
                            <div class="receipe-duration">
                                <h6>Category: <?php echo $catg; ?></h6>
                                <h6>Area: <?php echo $area; ?></h6>
                                <h6>Tags: <?php echo $tag; ?></h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">

                        <div class="receipe-ratings text-right my-5">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <a href="<?php echo $source; ?>" class="btn delicious-btn" target="_blank">Source</a>
                        </div>
                    </div>
                </div>

                <div class="row">
               
                    <div class="col-12 col-lg-8">
                        <h4>Instructions</h4>
                        <!-- Single Preparation Step -->
                        <div class="single-preparation-step d-flex">
                          <p> <?php echo nl2br($inst); ?> </p>
	
                           </div>
                        </div>
                              <!-- Ingredients -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Ingredients</h4>

                            <!-- Custom Checkbox -->
                            <?php  foreach ($ind as $item){ 
 	            if(!(strlen($item) ==1) ){
                                 echo '<div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">'. $item .'</label>
                            </div> '; }}?>

                            
                        </div>
                    </div>
                </div>

            </div>

          </div>

        </div>

      </div> 
    </section><!-- End About Section -->

<!-- ///////////////////////////////////////////////////////////// -->


    



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