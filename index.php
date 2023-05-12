<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Skateroom GOW</title>
</head>
<body>

    <?php include "header.php"?>
    
    <div class="slider-container">
    <p id="slogan">We value art, we value skate, we value social change.</p>
  <div class="slider">
    <div class="slide active">
      <img src="img/image1.jpg" alt="Image 1">
    </div>
    <div class="slide">
      <img src="img/image2.jpg" alt="Image 2">
    </div>
    <div class="slide">
      <img src="img/image8.jpg" alt="Image 3">
    </div>
    <div class="slide">
      <img src="img/image6.jpg" alt="Image 4">
    </div>
  </div>
  <button class="slider-btn slider-btn-left">&#8249;</button>
  <button class="slider-btn slider-btn-right">&#8250;</button>
</div>

<section id="artists">
  <div class="artist">
    <img src="img/andy-warhol.png" alt="Andy Warhol">
    <h2>Andy Warhol</h2>
    <p>American artist known for his contributions to the Pop Art movement in the 1960s, Warhol was famous for his paintings of Campbell's Soup cans, Marilyn Monroe, and Elvis Presley, among others.</p>
  </div>
  <div class="artist">
    <img src="img/keith-haring.png" alt="Keith Haring">
    <h2>Keith Haring</h2>
    <p>American artist and social activist who became known for his graffiti-style drawings that often dealt with political and social themes. Haring's art was heavily influenced by street culture and the AIDS epidemic.</p>
  </div>
  <div class="artist">
    <img src="img/jeff-koons.png" alt="Jeff Koons">
    <h2>Jeff Koons</h2>
    <p>American artist who rose to prominence in the 1980s with his sculptures of everyday objects, such as balloon animals and kitsch figurines, that were made using materials like stainless steel and porcelain.</p>
  </div>
</section>

<?php include "footer.php"?>

</body>
</html>