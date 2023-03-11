<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?=SCRIPTS.'css'.DIRECTORY_SEPARATOR.'app.css'?>">
    <link rel="stylesheet" href="<?=SCRIPTS.'css'.DIRECTORY_SEPARATOR.'owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?=SCRIPTS.'css'.DIRECTORY_SEPARATOR.'style.css'?>">
    <link rel="stylesheet" href="<?=SCRIPTS.'css'.DIRECTORY_SEPARATOR.'carousel.css'?>">
</head>
<body>

<header>
        <div class="wrapper">
            <h1><a href="/">Women's-day</a></h1>
            <nav>
                <ul>
                    <li><a  href="/posts" id="V">Une femme Africaine</a></li>
                    <li><a href="/formulaire">Parlons -en</a></li>
                    <li><a href="/admin">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

 <div class="tabs-content">
        <div class="tab-content active carousel">
            <div class="site-section bg-left-half mb-5">
                <div class="container owl-2-style">
                    <div class="owl-carousel owl-2">
                        
                    <div class="media-29101 carous">
                            <a href="#"><img src="../public/images/v.jpg" alt="Image" class="img-fluid"></a>
                           
                        </div>
                       
                        <div class="media-29101 carous">
                            <a href="#"><img src="../public/images/c.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                       
                        <div class="media-29101 carous">
                            <a href="#"><img src="../public/images/f.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                       
                        <div class="media-29101 carous">
                            <a href="#"><img src="../public/images/j.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                       
                        <div class="media-29101 carous">
                            <a href="#"><img src="../public/images/p.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                       
                        
                       
                     
                        <div class="media-29101 carous">
                            <a href="#"><img src="../public/images/z.jpg" alt="Image" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    <script src=" <?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'jquery-3.3.1.min.js'?>"></script>
    <script src=" <?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'popper.min.js'?>"></script>
    <script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'bootstrap.min.js'?>"></script>
    <script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'owl.carousel.min.js'?>"></script>
    <script src="<?=SCRIPTS.'js'.DIRECTORY_SEPARATOR.'main.js'?>"></script>


   <div class="container">
   <?= $content ?>
   </div>
  

   

</body>
</html>