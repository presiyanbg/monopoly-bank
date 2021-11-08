<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/design.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navigation">
        <div class="content">
            <div class="wrapper">
                <ul>
                    <li>
                        <a href="">
                            @lang('Home')
                        </a>
                    </li>

                    <li>
                        <a href="">
                            @lang('Apply')
                        </a>
                    </li>

                    <li class="r-180 logo">
                        <a href="">
                            <i class="fas fa-won-sign ab-center"></i>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            @lang('Thing')
                        </a>
                    </li>

                    <li class="link--login">
                        <a href="">
                            @lang('Long In')
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="hero">
            <div class="body ab-center">
                <div class="title">
                    <h1>Monopoly</h1>
                </div>

                <div class="subtitle">
                    <h3>@lang("The right way to do business")</h3>
                </div>

                <div class="separator separator-white">
                    <div class="separator-line">
                    </div>

                    <div class="separator-ball">
                    </div>

                    <div class="separator-line">
                    </div>
                </div>
            </div>

            <div class="wallpaper">
                <img src="{{URL::asset('/images/home.jpg')}}" alt="Home page wallpaper">
            </div>
        </div>
    </nav>
