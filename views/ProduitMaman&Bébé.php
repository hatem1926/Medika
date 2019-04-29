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
     <a href="Login.php">Login</a> <br>
     <a href="Inscription.php">NOUVEAU COMPTE</a> 
    </div>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Medika | Produits</title>

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
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  
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
            <li class="active"><a href="index.html">ACCEUIL</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUITS <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="ProduitBeauté.html">Beauté</a></li>                
                <li><a href="ProduitMaman&Bébé.html">Maman & Bébé</a></li>
                <li><a href="course-detail.html">Hygiène</a></li>      <li><a href="course-detail.html">Orthopédie</a></li>         
              </ul>
            </li>           
            <li class="dropdown"><a href="gallery.html">BONS PLANS<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="course.html">Meilleur Produits</a></li>                
                <li><a href="course-detail.html">Nouveautés</a></li>                
             </ul></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PANIER </a>
              
            </li>            
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
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Produits</h2>
           <ol class="breadcrumb">
            <li><a href="#">Produits</a></li>            
            <li class="active">Maman & Bébé</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/1bb.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Maman & Bébé</a>
                          
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">KINE+ HUILE RELAXANTE & APAISANTE CALMINE BEBE 50ml</a></h4>
                        <p>Huile de massage non grasse qui permet à votre bébé de retrouver le calme et le sommeil. CALMINE bébé soulage les maux de ventre et les ballonnements, s'applique en massage doux et circulaire sur tout le corps. 100% naturelle</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Prix</a>
                          <span class="mu-course-price" href="#">15.779TND</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/2bb.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Maman & Bébé </a>
                          
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">POUPON GAZ 150ML</a></h4>
                        <p>Poupon Gaz sirop lutte contre les gaz intestinaux et soulage les ballonnements.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Prix</a>
                          <span class="mu-course-price" href="#">12.947TND</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/3bb.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Maman & Bébé</a>
                        
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">NUK BIBERON FIRST CHOICE + TIGER 300ML</a></h4>
                        <p>Le biberon TIGER First Choice+, 300 ml est particulièrement recommandé pour favoriser l’allaitement au biberon. Son décor, à l’effigie de Mickey le héro des petits, charmera maman et bébé. 
</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Prix</a>
                          <span class="mu-course-price" href="#">23.265TND</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/4bb.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Maman & Bébé </a>
                          
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">DODIE SACHETS DE CONSERVATION X20</a></h4>
                        <p>Les Sachets de Conservation Dodie vont vous accompagner tout au long de votre allaitement. Pré-stérilisés, ils sont à la fois pratiques et hygiéniques pour conserver votre lait et le transporter. Vous allez adorer leur grande contenance ainsi que le bec verseur !</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Prix</a>
                          <span class="mu-course-price" href="#">46.529TND</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/5bb.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Maman & Bébé</a>
                          
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">ECRAN BEBE 50+ BIOLANE</a></h4>
                        <p>ECRAN MINÉRALE : Biolane Crème solaire pour bébés et enfants.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Prix</a>
                          <span class="mu-course-price" href="#">57.977TND</span>
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                        <a href="#"><img src="assets/img/courses/6bb.jpg" alt="img"></a>
                        <figcaption class="mu-latest-course-imgcaption">
                          <a href="#">Maman & Bébé </a>
                          
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                        <h4><a href="#">SPRAY SOLAIRE POUR ENFANTS SPF-50 ALOE VERA + BALON DE PLAGE</a></h4>
                        <p>Lait solaire Facteur de protection élevée. Produit conforme aux nouvelles recommandations européennes pour les produits solaires, protégeant des rayons UVB et UVA. Il contient de l’Aloe Vera aux propriétés cicatrisantes et régénératrices. Il est hydratant et anti-inflammatoire.</p>
                        <div class="mu-latest-course-single-contbottom">
                          <a class="mu-course-details" href="#">Prix</a>
                          <span class="mu-course-price" href="#">37.364TND</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- end course content container -->
                <!-- start course pagination -->
                <div class="mu-pagination">
                  <nav>
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span class="fa fa-angle-left"></span> Prev 
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                         Next <span class="fa fa-angle-right"></span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end course pagination -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Catégories</h3>
                    <ul class="mu-sidebar-catg">
                      <li><a href="#">Toilette & Soins Bébé</a></li>
                      <li><a href="">Change de bébé</a></li>
                      <li><a href="">Maman</a></li>
                      
                    </ul>
                  </div>
                  <!-- end single sidebar -->
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Meilleur Notes</h3>
                    <div class="mu-sidebar-popular-courses">
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/2bb.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">POUPON GAZ 150ML</a></h4>                      
                          <span class="popular-course-price">12.947TND</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/4bb.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">DODIE SACHETS DE CONSERVATION X20</a></h4>                      
                          <span class="popular-course-price">46.529TND</span>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object" src="assets/img/courses/5bb.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#">ECRAN BEBE 50+ BIOLANE</a></h4>                      
                          <span class="popular-course-price">57.977TND</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                 
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <h3>Mots Clés</h3>
                    <div class="tag-cloud">
                      <a href="#">Visage</a>
                      <a href="#">Cheveux</a>
                      <a href="#">Corps</a>
                      <a href="#">Bébé</a>
                      <a href="#">Maman</a>
                      <a href="#">Hygiène</a>
                      <a href="#">Shampoing</a>
                      <a href="#">Huiles</a>
                    </div>
                  </div>
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

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
                  <p>Ariana, Tunis, Tunisie</p>
                  <p>Telephone: (415) 453-1568 </p>
                  <p>Email: info@markups.io</p>
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