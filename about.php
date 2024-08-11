<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
    .about{
    width: 100%;
    padding: 7rem 0;
    background-image: url(img/jeon.jpg);
    background-repeat: no-repeat;
    background-position: bottom left;
    z-index: -1;
}

.about .container{
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
}

.section-title{
    margin: 0 auto;
    text-align: center;
}

.section-title h1{
    font-family: 'Great Vibes', cursive;
    font-size: 3rem;
    font-weight: 400;
    line-height: 3rem;
    color: #75492b;
}

.section-title span{
    font-weight: 300;
    font-size:  1.5rem;
    line-height: 1.5rem;
    color: #151515;
}

.about-detail{
    width: 100%;
    padding: 2rem;
}

.about-detail-content{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    align-items: center;
    border: 2px solid #75492b;
    border-radius: 30px;
    padding: 1rem;
}

.about-img img{
    width: 100%;
    height: 50%;
    border-radius: 30px;
    filter: drop-shadow(16px 16px 16px rgba(0,0,0,0.25));
}

.about-description{
    position: relative;
    padding: 2rem;
}

.about-description::before{
    content: '';
    position: absolute;
    width: 100%;
    height: 110%;
    top:-10%;
    left: 0;
    background-color: #f7e6df;
    border-radius: 30px;
    box-shadow: 4px 8px 16px rgba(0,0,0,0.25);
    z-index: -1;
}

.about-description p{
    font-weight: 400;
    line-height: 2rem;
    color: #151515;
}
   </style>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="navbar-header">
            <h1 style="text-align:left;color:white;font-size:30px;line-height:20px;word-spacing:10px">BEAUTY-SALON</h1>
        </div>
<nav>
<ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><span class="glyphicon glyphicon-home">HOME</span></a></li>
    <li><a href="admin/login.php"><span class="glyphicon glyphicon-log-in">ADMIN-LOGIN</span></a></li>
    <li><a href="user/login.php"><span class="glyphicon glyphicon-log-in">USER-LOGIN</a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="about.php"><span class="glyphicon glyphicon-user">ABOUT-US</span></a></li>
   
</ul>

</nav>
    </header>

    <section class="about" id="about">
        <div class="container">
            <div class="section-title">
                <h1>our story</h1>
                <span>studio hair</span>
            </div>
            <div class="about-detail">
                <div class="about-detail-content">
                <div class="about-img">
                    <img src="images/kateryna.jpg">
                </div>
                <div class="about-description">
                    <p> The main aim of this online beauty salon is to assist the user to book the appointment <br>
                        within the  beauty salon for online.Thi ssystem is essentially for the users <br>
                        where they will book a meeting in this online salon with login. <br>
                         The user can make a meeting within the salon and therefore the admin of the system approves it.<br>
                    Besides, the user also can modify the appointments with their requirements.
             
                        </p>
    
                </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
