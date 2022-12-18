<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>山羊の前端小窝</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .shell {
        height: 100vh;
        overflow-x: hidden;
        perspective: 3px;
    }

    .shell div {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        font-style: 30px;
        letter-spacing: 2px;
    }

    .image {
        transform: translateZ(-1px) scale(1.6);
        background-size: cover;
        height: 100vh;
        z-index: -1;
    }

    .text {
        height: 50vh;
        background-color: #fff;
    }

    .text h1 {
        color: #000;
    }

    .heading {
        z-index: -1;
        transform: translateY(-30vh) translateZ(1px);
        color: #fff;
        font-size: 30px;
    }
</style>

<body>
    <div class="shell">
        <div class="image" style="background-image: url('/pic/1.jpg');"></div>
        <div class="heading">
            <h1>When you are confused</h1>
        </div>
        <div class="text">
            <h1>Set goals in your mind</h1>
        </div>

        <div class="image" style="background-image: url('/pic/2.jpg');"></div>
        <div class="heading">
            <h1>When you're down</h1>
        </div>
        <div class="text">
            <h1>Try to wake up the beast in your heart</h1>
        </div>
        <div class="image" style="background-image: url('/pic/3.jpg');"></div>
        <div class="heading">
            <h1>When prople leave you</h1>
        </div>
        <div class="text">
            <h1>It's time to start your season</h1>
        </div>

        <div class="image" style="background-image: url('/pic/4.jpg');"></div>
        <div class="heading">
            <h1>Come on,stranger.</h1>
        </div>
    </div>
</body>

</html>