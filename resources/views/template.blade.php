<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Animation Month</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            .full-height {
                height: 100vh;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .item {
            font-family: impact;
            color:#1d1d1d;
            background-color: #ccc;
            text-align: center;
            font-size: 2rem;
            padding: 0.5rem 0;
            width: calc(10% - 0.5rem);
            min-width: 200px;
            margin-bottom: 0.5rem;

            }

            .box{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;

            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <h1>Create Calendar</h1>
                <div class="box">
                    <div class="item">1</div>
                    <div class="item">2</div>
                    <div class="item">3</div>
                    <div class="item">4</div>
                    <div class="item">5</div>
                    <div class="item">6</div>
                    <div class="item">7</div>
                    <div class="item">8</div>
                    <div class="item">9</div>
                    <div class="item">10</div>
                    <div class="item">11</div>
                    <div class="item">12</div>
                    <div class="item">13</div>
                    <div class="item">14</div>
                    <div class="item">15</div>
                    <div class="item">16</div>
                    <div class="item">17</div>
                    <div class="item">18</div>
                    <div class="item">19</div>
                    <div class="item">20</div>
                    <div class="item">21</div>
                    <div class="item">22</div>
                    <div class="item">23</div>
                    <div class="item">24</div>
                    <div class="item">25</div>
                    <div class="item">26</div>
                    <div class="item">27</div>
                    <div class="item">28</div>
                    <div class="item">29</div>
                    <div class="item">30</div>
                    <div class="item">31</div>
                </div>


            </div>
        </div>
    </body>
</html>
