<?php
include_once("components/head.php");
$title = "Физико-Математическая Научная Конференция";
include_once("components/header.php"); 
?>
<main>
  
   <div class="container">

   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <!--<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>-->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/11.jpeg" alt="Second slide">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="image/10.jpeg" alt="Third slide">
    </div>
    <!--<div class="carousel-item">
      <img class="d-block w-100" src="image/5.jpeg" alt="Fourth slide">
    </div>-->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  

</div>
<div class="clear"></div>
<div class="container">
<blockquote class="blockquote text-center">
  <p class="mb-2">Наука может развиваться только теми, кто полностью впитал в себя стремление к истине и пониманию. Это стремление, однако, проистекает из сферы религии. К ней же принадлежит вера в возможность, что правила, пригодные для мира сущего, рациональны, т. е. доступны разуму. Я не могу представить себе подлинного ученого без этой глубокой веры.</p>
  <cite title="Source Title">«Эйнштейн о религии»</cite></footer>
</blockquote>
</div>
<div class="clear"></div>
</main>
  
            
         
<div class="clear"></div>
        <?php
        include_once("components/footer.php");
        ?>