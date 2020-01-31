<!DOCTYPE html>
<html>
<head>
    <meta name= viewport content= "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href=".css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
<header>
    <nav id="navbar">
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="">Over Mij</a>
            <a href="">Opleidingen</a>
            <a href="">Contact Me</a>
        </div>
    </nav>
<div class="container">
    <div class="gradient"></div>
    <div class="tree"></div>
    <div class="lines"></div>
</div>

<script>
    window.onscroll = () => {
        const nav = document.querySelector('#navbar');
        if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
    };
</script>

<style>
    html {
        position: relative;
        top: 0;
        left: 0;
        max-width: 100vw;
        min-height: 200vh;
        margin: 0px;
        padding: 0px;
        border: 0px;
    }
    body {
        padding: 0vmin;
        font-size: 16px;
        font-family: sans, sans-serif;
        color: #333;
    }
    body {
        display: block;
        margin: 0px;
    }

    a {
        color: inherit;
        font-style: italic;
    }

    nav {
        position: fixed;
        top: 0;
        left: 0;
        height: 3em;
        width: 100%;
        background-color: transparent;
        box-sizing: border-box;
        padding: 12px 18px;
        transition: background-color 0.4s ease-out;
    }

    nav span {
        font-weight: 600;
        letter-spacing: .085em;
    }

    nav button {
        position: absolute;
        top: 0;
        transform: translateY(50%);
        right: 0;
        min-height: 1.5em;
        min-width: 80px;
        background-color: #eee;
        color: #222;
        border: 0px;
        border-radius: 2px;
        margin-right: 18px;
        text-transform: uppercase;
    }

    nav.scroll {
        background-color: #f5f5ff;
        color: #eef;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    }

    body > header {
        margin-top: 0em;
    }
    menu{
        position: absolute;
        right: 20px;
    }
    .menu a{
        color: #333;
        text-decoration: none;
        font-weight: 700;
        margin-left: 20px;
        transition: color 0.3s;
        text-transform: uppercase;
    }
    .menu a:hover{
        color: #000101;
    }

    /*NavBar*/


    .btn{
        display: none;
        position: absolute;
        right: 20px;
    }
    .btn:hover > span{
        background: #000101;
    }
    .btn span{
        display: block;
        margin: 6px;
        width: 40px;
        height: 3px;
        background: #333;
    }
    p{
        padding: 20px;
        font-size: 20px;
        text-align: justify;

    }
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #121316;
    }

    .container {
        width: 66vmin;
        height: 66vmin;
        position: relative;
        overflow: hidden;
        border-radius: 50%;
    }

    .gradient {
        height: 100%;
        background: linear-gradient(
            #A12BFB 25%,
            #FC2DFC,
            #EB209B 75%
        );
    }

    .lines {
        position: absolute;
        top: -5%;
        left: -5%;
        width: 110%;
        height: 110%;
        background: repeating-linear-gradient(
            rgba(0, 0, 0, .725),
            rgba(0, 0, 0, .725) 2.5%,
            transparent 2.5%,
            transparent 5.25%
        );
        animation: lines linear infinite .75s;
    }

    .tree {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url(https://78.media.tumblr.com/6fbf1edc445d7210e02d20e6e342287a/tumblr_ozop06XvsX1vq64mxo1_1280.png) 55% 5vmin no-repeat;
        background-size: 70%;
        filter:
            brightness(0%)
            blur(.5px);
    }

    @keyframes lines {
        to {
            background-position: 0 4vmin;
        }
    }
</style>
</html>