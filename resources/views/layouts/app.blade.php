<!DOCTYPE html>
<html>
    <head>
        <title>#JustRandomSmashUp</title>
        <link rel="stylesheet" href="/css/app.css">
        @include('analytics')
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center center-block">
                <img style="height: 70px;" src="/img/logo-{{ rand(1, 3) }}.png" alt="#JustRandomSmashUp"/>
            </div>
        </div>
        <hr>
        @yield('content')
    </div>
    <div style="position: fixed; border-top: 1px solid #999; bottom: 0; background-color: #fafafa;width:100%;text-align:right;padding: 1em">
        Made with <3 by <a href="https://www.chrisforrence.com" target="_blank">Chris Forrence</a>. Smash Up! and their intellectual property belongs to Paul Peterson and
        Alderac Entertainment Group. I'm just randomly generating faction combinations. Constant improvements incoming.
    </div>
    <script src="/js/app.js"></script>
    <script>
        $(function() {
        });
    </script>
    </body>
</html>