<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;400;500;600;700&family=Playpen+Sans:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./partial/style.css">
    <title>Omega Movie Drive</title>
</head>
<body>
    <header>
        <?php 
            require "./partial/_nav.php";
            require "./partial/_nav_mob.php";

        ?>

        <section class="u-body" >
            <div class="user-profile" >
                <img src="./img/user.png" alt="user">
                <div class="user" >User Name</div>
                <div class="type" >User Type . <a  href="#" >--Request For super-User Access--</a> </div> 
                <div class="upload" >Upload : <?php  echo "N/A"; ?> </div>
                <div class="download" >Download : <?php  echo "N/A"; ?> </div>
                <div class="activity" >Activity : <?php  echo "N/A"; ?> </div>  
                <div class="theme">Darkmode-Upcoming</div>

                <hr class= "line" >

                <div class="setting" >

                       <a href="#"> <img src="./img/setting.png"  ></a>
                       <a href="#"> <img src="./img/notification.png" > </a>
                       <a href="#"> <img src="./img/mail.png" > </a>
                       <a href="#"> <img src="./img/logout.png" > </a>

                </div>

            </div>

            <div class="exclusive-body" >
                <div class="exclusive" >
                    Exclusive
                    <hr class="line" >
                </div>
                <div class="exclusive-slider" >
                    <?php require "./partial/_slider.php" ?>
                </div>

            </div>

            <div class="forum" >
                    forum
                    <hr class="b-hr">
                    <div class="f-topic" >
                            Forum topic goes here
                    </div>
                

            </div>

            <div class="discussion" >
                discussion
                <hr class="b-hr">
                <div class="d-topic" >
                    Discuss Your Problem And Ideas Here To Improve 
                </div>


            </div>


            
        </section>

    </header>
    <script typ="text/javascript">
    const expandButton = document.querySelector('.expand-button');
    const expandButtonIcon = document.querySelector('.expand-button i');
    const reMenu = document.querySelector('.re-menu');

    expandButton.onclick = function(){
        reMenu.classList.toggle('open');
        const isOpen = reMenu.classList.contains('open');

        expandButtonIcon.classList =isOpen

        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'




    }

</script>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>
    
</body>
</html>