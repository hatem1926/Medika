<!DOCTYPE html>
<html lang="en">
 <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
  height: 30px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: darkblue; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: black; 
}
</style>
  <head>
         <style>
img { 
  height: 100%;
  width: 100%; 
}
</style>
<!--<img src="ars.jpg" alt="HTML5 Icon" style="">-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Medika | Accueil</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body> 
<style>
#fond {
width: 100%;
  height: 100%;
  background-image: url('ars.jpg');
  background-size: 100% 100%;

}

#contenu {
position:relative;
top:35px;
left:1050px;
height: 180px;
  font-size: 20px;
z-index:10;
color: #fff;

}
br {
content: "";
display: block;
margin-bottom: 50px;
}
 </style>
<div id="fond">

    <div id="contenu">
     <a href="index.html">S'IDENTIFIER</a> <br>
     <a href="index.html">NOUVEAU COMPTE</a> 
    </div>

</div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- End header  -->
  <!-- Start menu -->
  <style>
  
            #ABC {
                background-color: #1D47BC;
            }
        </style>
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <!--<a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a>-->
          <!-- IMG BASED LOGO  -->
                    


           <!--<a class="navbar-brand" href="index.html"><img src="as.png" alt="logo"></a> 
        </div>-->
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.html">ACCUEIL</a></li>            
            <li class="dropdown">
              <a href="ProduitBeauté.html" class="dropdown-toggle" data-toggle="dropdown">PRODUITS <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="ProduitBeauté.html">Beauté</a></li>                
                <li><a href="ProduitMaman&Bébé.html">Maman & Bébé</a></li>
                <li><a href="course-detail.html">Hygiène</a>
                </li>      <li><a href="course-detail.html">Orthopédie</a></li>         
              </ul>
            </li>           
            <li class="dropdown"><a href="gallery.html">PANIER<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="Reclamation.php">Reclamation</a></li>                
                <li><a href="">Lister</a></li>                
             </ul></li>           
            <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li>
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    
        
          <img src="assets/img/slider/1.jpg" alt="img">
        
      
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/2.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Beauté</h4>
        <span></span>
        <h2>Des nouveaux modéles!</h2>
        <p>La nouvelle collection est là, visitez notre boutique pour plus de details</p>
        <a href="#" class="mu-read-more-btn">CONSULTER</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/3.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Maman & bébé</h4>
        <span></span>
        <h2>Tout vos besoins sont là</h2>
        <p>Retrouvez les meilleurs soins pour bébés et mamans sélectionnés par les experts Medika.</p>
        <a href="#" class="mu-read-more-btn">VOIR PLUS</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/4.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Hygiène</h4>
        <span></span>
        <h2>Prenez soin de votre hygiène corporelle !</h2>
        <p>Grâce à l'assortiment de produits d'hygiène proposés par nos pharmaciens, profitez des bienfaits des lotions, produits de douche et soins dentaires</p>
        <a href="#" class="mu-read-more-btn">VOIR PLUS</a>
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- Start single service -->
          
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
 <style>
            #ABC {
                background-image: url("arriere1.jpg");
                height: 100%;
  width: 100%; 

            }
        </style>
  <section id="ABC">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>À PROPOS DE NOUS</h2> 

                  </div>
                  <!-- End Title -->
                  <p style="color: #ffffff;">Nous mettons à votre disposition des experts en pharmacie et cosmétiques pour vous accompagner à faire de meilleurs choix.<br></p>
                  <ul>
                    <li style="color: #ffffff;">Notre réseau de distribution est constitué des professionnels du commerce et du transport qui garantirons la livraison à temps et en toute sécurité de vos livraisons.</li>
                    
                  </ul>
                  
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                  <img src="assets/img/about-us.jpg" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  
  
  <!-- Start latest course section -->
  <section id="mu-latest-courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-latest-courses-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Meilleurs Produits!</h2>
            </div>
            <!-- End Title -->
            <!-- Start latest course content -->
            <div id="mu-latest-course-slide" class="mu-latest-courses-content">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Beauté</a>
                      
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Avène Cold Cream</a></h4>
                    <p>Nourrit, hydrate* et protège votre peau des agressions extérieures.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Prix</a>
                      <span class="mu-course-price" href="#">45.93TND</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Hygiène </a>
                      
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Eau de Bouche Botot</a></h4>
                    <p>Eau de Botot est historiquement le premier produit pour hygiène buccale mis sur le marché pharmaceutique français.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Prix</a>
                      <span class="mu-course-price" href="#">65TND</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Beauté</a>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Huile Prodigieuse NUXE</a></h4>
                    <p>L'Huile Prodigieuse® , huile sèche mythique N°1 des Huiles en pharmacie, nourrit, répare et sublime le visage, le corps et les cheveux.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Prix</a>
                      <span class="mu-course-price" href="#">52,35TND</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/1.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Drawing</a>
                      <span><i class="fa fa-clock-o"></i>90Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/2.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Engineering </a>
                      <span><i class="fa fa-clock-o"></i>75Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="mu-latest-course-single">
                  <figure class="mu-latest-course-img">
                    <a href="#"><img src="assets/img/courses/3.jpg" alt="img"></a>
                    <figcaption class="mu-latest-course-imgcaption">
                      <a href="#">Academic</a>
                      <span><i class="fa fa-clock-o"></i>45Days</span>
                    </figcaption>
                  </figure>
                  <div class="mu-latest-course-single-content">
                    <h4><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quod nisi quisquam modi dolore, dicta obcaecati architecto quidem ullam quia.</p>
                    <div class="mu-latest-course-single-contbottom">
                      <a class="mu-course-details" href="#">Details</a>
                      <span class="mu-course-price" href="#">$165.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End latest course content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End latest course section -->


  <!-- Start testimonial -->
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-1.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>John Doe</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-3.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Rebaca Michel</h4>
                  <span>Happy Parent</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="assets/img/testimonial-2.png" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Stev Smith</h4>
                  <span>Happy Student</span>
                </div>
              </div>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            
            <!--<div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>-->
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Nouveautés</h4>
                <p>Soyez à jour graçe à vos emails</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Entrer votre adresse mail">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>15 Rue de Khartoum, Tunis, Tunisie</p>
                  <p>Telephone: +(216) 22885147 </p>
                  <p>Email: contact@medika.tn</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>

<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["forminscription"]["name"].value;
        var b=document.forms["forminscription"]["email"].value;
        var c=document.forms["forminscription"]["tel"].value;
        var d=document.forms["forminscription"]["region"].value;
        var e=document.forms["forminscription"]["type"].value;
        var f=document.forms["forminscription"]["comment"].value;
        var g=document.forms["forminscription"]["datee"].value;
        var h=document.forms["forminscription"]["etat"].value;
        if (a==null || a=="",b==null || b=="",c==null || c=="",d==null || d=="",e==null || e=="",f==null || f=="",g==null || g=="",h==null || h=="")
        {
            alert("TOUS LES CHAMPS DOIEVENT ETRE REMPLI!!");
            return false;
        }
  
    }
</script>
<SCRIPT type="text/javascript">
function confirmation(){
    return confirm("Êtes-vous sur de vouloir supprimer ce(s) livreur(s) ?");
}
</SCRIPT>
<SCRIPT type="text/javascript">
function confirmation1(){
    return confirm("Êtes-vous sur de vouloir supprimer ce livraison ?");
}
</SCRIPT>