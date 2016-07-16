<!DOCTYPE html>
<html>
<head>
    <title>#JustRandomSmashUp</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    @include('analytics')
</head>
<body>

<header>
    <img style="height: 70px;" src="/img/logo-{{ rand(1, 3) }}.png" class="pure-img"
         alt="#JustRandomSmashUp"/>
</header>
<div class="wrapper">
    <div class="pure-g">
        <app></app>
    </div>
</div>

<footer>
    Made with <3 by <a href="https://www.chrisforrence.com" target="_blank">Chris Forrence</a>
</footer>


<script src="/js/app.js"></script>
<script src="/js/smooth-scroll.js"></script>
<script>
    smoothScroll.init();
</script>
</body>
</html>