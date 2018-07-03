<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perkiraan Cuaca</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background:url('https://c.pxhere.com/photos/96/0c/background_image_blue_white_clouds_sky-714232.jpg!d');background-repeat: no-repeat;background-size:cover;background-position: center;">
    <div class="content">
        <div class="container">
            <br><br>
            <div class="row">
                @foreach ($response['consolidated_weather'] as $key => $item)
                    @if($key == 0)
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 col-md-offset-3" style="position: relative;transform: translateY(100%);" align="right">
                                <div class="row"><font size="6" color="white">{{ round($item['the_temp']) }}<sup>o</sup></font></div>
                                <div class="row">
                                    <p><font color="#0099cc">{{ round($item['min_temp']) }}<sup>o</sup></font> / <font color="orange">{{ round($item['max_temp']) }}<sup>o</sup></font></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4" align="center">
                                <img src="https://www.metaweather.com//static/img/weather/{{ $item['weather_state_abbr'] }}.svg" alt="weather" width="80%">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4" style="position: relative;transform: translateY(100%);">
                                <div class="row"></div>
                                <div class="row">
                                    <font size="4" color="white">RealFeel&reg; {{ round($item['the_temp']) - 1 }}<sup>o</sup></font>
                                </div>
                            </div>
                        </div>
                        <div class="row" align="center">
                            <h1><font color="#0099cc">{{ $item['weather_state_name'] }}</font></h1>
                        </div>
                        <br><br>
                    @else
                        @if ($key == 1)
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 col-md-offset-1 col-lg-offset-1">
                            <div class="thumbnail" style="background-color: black;border-color: black;opacity:0.9">
                                <div class="row" style="border-bottom:1pt solid silver;margin-left:3px;margin-right:3px"><center><h5><font color="#0099cc"><strong>{{ date('l', strtotime($item['applicable_date'])) }}</strong></font></h5></center></div>
                                <div class="row">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <img src="https://www.metaweather.com//static/img/weather/{{ $item['weather_state_abbr'] }}.svg" alt="weather">
                                    </div>
                                    <div class="col-md-4 col-md-4 col-sm-4 col-xs-4" style="position: relative;transform: translateY(50%);">
                                        <div class="row"><font color="orange">{{ round($item['max_temp']) }}<sup>o</sup></font></div>
                                        <div class="row"><font color="#0099cc">{{ round($item['min_temp']) }}<sup>o</sup></font></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 ">
                            <div class="thumbnail" style="background-color: black;border-color: black;opacity:0.9">
                                <div class="row" style="border-bottom:1pt solid silver;margin-left:3px;margin-right:3px"><center><h5><font color="#0099cc">{{ date('l', strtotime($item['applicable_date'])) }}</font></h5></center></div>
                                <div class="row" align="center" >
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <img src="https://www.metaweather.com//static/img/weather/{{ $item['weather_state_abbr'] }}.svg" alt="weather">
                                    </div>
                                    <div class="col-md-4 col-md-4 col-sm-4 col-xs-4" style="position: relative;transform: translateY(50%);">
                                        <div class="row"><font color="orange">{{ round($item['max_temp']) }}<sup>o</sup></font></div>
                                        <div class="row"><font color="#0099cc">{{ round($item['min_temp']) }}<sup>o</sup></font></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>