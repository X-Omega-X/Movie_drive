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

        <section class="r-user" >

               <div class="se-movie"  >
                <h1>Request</h1>

                <label>Movie Name</label>
                <input type="search" class="search" >
                <span class="underline"></span>
                <button class="filter1" >Send Request</button>
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
    
</body>
</html>