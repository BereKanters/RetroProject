<!DOCTYPE html>
<head>
    <title>Portfolio</title>
    <meta name= viewport content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background: #333;
        background-attachment: fixed;
        background-size: cover;
    }

    #video-background {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
    }





    /*NavBar*/


    a {
        position: relative;
        display: inline-block;
        padding: 25px 30px;
        margin: 40px;
        font-size: 24px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 4px;
        transition: 0.5s;
    }

    .btns{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 0vh;
        flex-direction: row;
    }
    .pink-btn{
        color: #e100ff;
        border: 1.5px solid #e100ff;
        border-radius: 7px;
    }
    .pink-btn:hover{
        background-color: #e100ff;
        color: #050801;
        box-shadow: 0px 0px 5px #e100ff, 0px 0px 25px #e100ff, 0px 0px 50px #e100ff, 0px 0px 100px #e100ff;
        -webkit-box-reflect: below 1px linear-gradient(transparent, #0005);
    }


    /*NavBar*/

    .centered{
        position:absolute;
        display: flex;
        justify-content: center;
        left:47vw;
        top:40vh;
        transform:translateX(-50%) translateY(-50%);
        text-align:center;
    }
    .chrome {
        position: absolute;
        background-image: -webkit-linear-gradient(#378DBC 0%, #B6E8F1 46%, #ffffff 50%, #32120E 54%, #FFC488 58%, #582C11 90%, #EC9B4E 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke: 4px #f5f5f5;
        font-size: 200px;
        font-family: 'Titillium Web', sans-serif;
        font-style: ;
        margin: 0;
        line-height: 1;
    }

    .chrome:before {
        content: 'PORTFOLIO';
        position: absolute;
        left: 0;
        top: 0;
        z-index: 10;
        background-image: -webkit-linear-gradient(-40deg, transparent 0%, transparent 40%, #fff 50%, transparent 60%, transparent 100%);
        background-position:-680px 0;
        -webkit-background-clip: text;
        -webkit-text-stroke: 0;
        padding-right: 300px;
        -webkit-animation-name: chrome_effect;
        -webkit-animation-duration: 6s;
        -webkit-animation-delay: 2s;
        -webkit-animation-timing-function: linear;
        -webkit-animation-iteration-count: infinite;
    }

    .dreams {
        position: absolute;
        margin: 0px;
        font-family: 'Mr Dafoe', cursive;
        font-size: 160px;
        color: #F975F7 ;
        transform:rotate(-15deg);
        -ms-transform:rotate(-15deg); /* IE 9 */
        -webkit-transform:rotate(-15deg); /* Safari en Chrome */
        margin-left: 400px;
        margin-top: 50px;
        -webkit-text-stroke: 1px #f008b7;
        -webkit-filter: drop-shadow(2px 2px 20px #f008b7);
        z-index: 20;
    }

    .windows .dreams {
        -webkit-text-stroke: 4px #f008b7;
    }
    @-webkit-keyframes chrome_effect {
        0% {background-position:-680px 0;}
        10% {background-position:420px 0;}
        100% {background-position:420px 0;}
    }

</style>
<div class="centered">
    <h1 class="chrome">PORTFOLIO</h1>
    <h3 class="dreams">Bere</h3>
</div>
<body>
    <nav id="navbar">
        <div class="menu btns">
            <a class="pink-btn" href="#">Home</a>
            <a class="pink-btn" href="#">About Me</a>
            <a class="pink-btn" href="#">Opleidingen</a>
            <a class="pink-btn" href="#">Contact Me</a>
        </div>
    </nav>
</body>


<video autoplay loop id="video-background" muted>
    <!--   <source src="http://zplex.gq/files/madcowfilms.mp4" type="video/mp4"> -->
    <source src="retro.mp4"
            <body>
            Wahahahaed
            </body>
</video>
</body>

