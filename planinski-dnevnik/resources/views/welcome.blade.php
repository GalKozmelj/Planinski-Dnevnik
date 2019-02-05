<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="svg/favicon/favicon.ico" sizes="16x16 32x32" type="image/png">

        <title>Hribolazci</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            @font-face{
                font-family: sexyFont1;
                src: url('/fonts/sexyFont1.ttf');

            }



            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'arial';
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url('/svg/bg2.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                padding: 20px;                
            }

            .links a:hover{
                border-bottom: 2px solid white;
            }



            .links1 > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                
            }

            .m-b-md {
                margin-bottom: 30px;
                font-family: 'sexyFont1';
                
            }
            .links1 a:hover{
                background-color: rgba(255,255,255,0.5);

            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">  

            <div class="content">
                <div class="title m-b-md">
                    Hribolazci.com
                </div>


                <div class="links1">
                    <a style="border:solid white 2px; padding: 20px;" href="{{ route('login') }}">Getting started</a>
                </div>
            </div>
        </div>
    </body>
</html>
