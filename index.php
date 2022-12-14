<?php  

$xml = simplexml_load_file("data.xml");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="header container">
        <ul class="header__items">
            <li class="header__item"><a href="#no" class="">Home</a></li>
            <li class="header__item"><a href="#no" class="">About me</a></li>
            <li class="header__item"><a href="#no" class="">Skills</a></li>
            <li class="header__item"><a href="#no" class="">Portfolio</a></li>
            <li class="header__item"><a href="#no" class="">Contacts</a></li>
            
        </ul>

    </header>

    <main>
        <section class="denis container">
            <div class="denis_title">
                <div class="logo">
                    Denis Novik
                </div>
    
                <div class="about">
                    UX | UI designer 24 years old, Minsk
                </div>
            </div>
            <div class="man_img"><img class="man" src="img/man.jpg" alt="man"></div>

        </section>
      
        <section class="about_me">
            <div class="heading ">About me</div>
            <div class="text">
                <p class="text p1">Hi, I'm Denis – UX/UI designer from Minsk. </p>
                <p class="text p1">I'm interested in design and everything connected with it.</p>
                <p class="text p2">I'm studying at courses "Web and mobile design interfaces" in IT-Academy. </p>
                <p class="text p3">Ready to implement excellent projects with wonderful people.</p>
            </div>  
        </section>
        <section class="skills">
            <div class="heading skills">Skills</div>
            <div class="text ">I work in such programs as</div>
        </section>
        <section class="programs container">
            <ul class="program_items">
                <li>
                    <div class="item">
                        <img class="program_item" src="img/Photoshop.jpg" alt="">
                        <p class="text_item">Adobe Photoshop</p>
                        <img class="stars" src="img/Group 2.svg" alt="">
                    </div>
                </li>
                <li>
                    <div class="item">
                        <img class="program_item" src="img/Illustrator.jpg" alt="">
                        <p class="text_item">Adobe Illustrator</p>
                        <img class="stars" src="img/Group 3.svg" alt="">
                    </div>
                </li>
                <li>
                    <div class="item">
                        <img class="program_item" src="img/AE.jpg" alt="">
                        <p class="text_item">Adobe After Effects</p>
                        <img class="stars" src="img/Group 2.svg" alt="">
                    </div>
                </li>
                <li>
                    <div class="item">
                        <img class="program_item" src="img/Group.svg" alt="">
                        <p class="text_item">Figma</p>
                        <img class="stars" src="img/Group 2.svg" alt="">
                    </div>
                </li>
            </ul>
        
        </section>
        <section class="portfolio container">
            <div class="heading portfolio">Portfolio</div>
            <?php foreach($xml->item as $item) { ?>

                <div class="img_portfolio">
                    <img class ="img" src=" <?php echo $item->img ?> " alt="">
                    <div class="inf"> <?php echo $item->name ?> </div>
                    

                    <a class="text" href="update.php?id=<?php echo $item['id'] ?>">Update</a>
                    <a class ="text" href="delete.php?id=<?php echo $item['id'] ?>">Delete</a>
                </div>

            <?php } ?>

        </section>

        <a class="text" href="create.php">Create new</a>
        <section class="contacts">
            <div class="heading contacts">Contacts</div>
            <div class="text"><p class="text p4">Want to know more or just chat? 
                You are welcome!</p></div>
            <div class="buttoms">
                <a href="#no"><div id="rectangle"><p class="buttom">Send message</p></div></a>
            
            </div>
            <ul class="contacts_items">
                <li><a href="#no"><img class="cont" src="img/Group 2in.svg" alt=""></a></li>
                <li><a href="#no"><img class="cont" src="img/Group 8insta.svg" alt=""></a></li>
                <li><a href="#no"><img class="cont" src="img/Group 9be.svg" alt=""></a></li>
                <li><a href="#no"><img class="cont" src="img/Group 10.svg" alt=""></a></li>
            </ul>
            <div class="cont_text">
                <p class="p5">Like me on</p>
                <p class="p6">LinkedIn, Instagram, Behance, Dribble</p>
            </div>
        </section>
    </main>
</body>
</html>