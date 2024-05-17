<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
</head>
<body class="w3-light-grey">

<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">

</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>ALLYSA JOYCE ESTEVES</b></h1>
    <h6>Welcome to my <span class="w3-tag">PORTFOLIO</span></h6>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="https://scontent.fcrk4-2.fna.fbcdn.net/v/t39.30808-6/437128815_3805226289708246_6188822937068714880_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=i0gDAcnaUk0Q7kNvgFgHlV1&_nc_ht=scontent.fcrk4-2.fna&oh=00_AYDyMjJHGFPe6uyDd4aESBm10rNMha5NshZJ9ryWD2cgDg&oe=664CD929" alt="Fashion Blog" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">Allysa's</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Portfolio</b></h1>
      
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>ALLYSA JOYCE ESTEVES</h3>
          <h5>Title description, <span class="w3-opacity">May 15, 2024</span></h5>
        </div>

        <div class="w3-justify">
          <p><strong>More Hats!</strong> Hello, I'm Allysa Joyce Esteves, and I'm thrilled to welcome you to my portfolio showcasing my journey as a web designer. With passion for blending creativity and functionality, I specialized in crafting visually stunning and intuitive websites that leave a lasting impression. Through my work, I aim to transform ideas into captivating digital experiences, each meticulously designed to engage and inspire visitors. From sleek and modern layouts to dynamic user interfaces, I strive to push the boundaries of web design while ensuring seamless navigation and accessibility for all users..</p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>

          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>

              <div class="w3-col l10 m9">
                <h4>George <span class="w3-opacity w3-medium">May 3, 2015, 6:32 PM</span></h4>
                <p>Great blog post! Following</p>
              </div>
          </div>
        </div>
      </div>
      <hr>

      <!-- Blog entry -->
      
      <!-- Blog entry -->
      
      
    <!-- END BLOG ENTRIES -->


    <!-- About/Information menu -->
   
<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>
