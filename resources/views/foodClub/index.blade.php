<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>address ::: user office ::: foodclub</title>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="js/gmaps.js"></script>
    <script src="//code.jquery.com/jquery.js" ></script>

        <style type="text/css">
            #map {
                width: 400px;
                height: 400px;
            }
        </style>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet" type="text/css" />

    {{--<script type="text/javascript">--}}
        {{--//flash--}}
        {{--$('#flash-overlay-modal').modal();--}}
        {{--$('div.alert').not('.alert-important').delay(3000).slideUp(300);--}}
    {{--</script>--}}
    {{--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">--}}
    {{--//flash--}}

</head>

<body>
<div class="cbc">
    <div class="main">
        <header>
            <div class="center_box">
                <div class="wrapper">

                    <div class="logo_box">
                        <a href="index.html"><img src="img/logo.png" alt="foodclub" /></a>
                    </div>

                    <div class="lng_box">
                        <a href="#" class="flag_ar"></a>
                    </div>

                    <div class="orders_counter">
                        <span class="num">2<span class="line"></span></span>
                        <span class="num">1<span class="line"></span></span>
                        <span class="num">7<span class="line"></span></span>
                        <span class="num">0<span class="line"></span></span>

                        <span class="label">orders<br/>today</span>
                    </div>

                    <div class="r_box">
                        <a href="tel:8800117117" class="h_phone"><span class="ico"></span><span>800 117-117</span></a>

                        <div class="upan">
                            <div class="notice">
                                <a href="#" class="ico_notice nftoggle"></a>

                                <nav class="utnav">
                                    <ul>
                                        <li class="item">
                                            <span class="ico ico_1"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_2"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li class="item">
                                            <span class="ico ico_3"></span>
                                            <div class="text_box">
                                                <h3>5 points</h3>
                                                <p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
                                            </div>
                                            <a href="#" class="gcross"></a>
                                        </li>
                                        <li><a href="#" class="more">Show more notifications</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="navbox">
                                <a href="#" class="midbox nftoggle">
                                    <img src="imgc/user_ava_1_40.jpg" alt="" />
                                    <span class="warrd"></span>
                                </a>
                                <nav class="utnav">
                                    <ul>
                                        <li class="points">600 points</li>
                                        <li class="sepor"></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Orders</a></li>
                                        <li><a href="#">Address</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li class="sepor"></li>
                                        <li><a href="#" class="logout">Log Out</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        <div class="center_box cb">
            <div class="uo_tabs cf">
                <a href="#"><span>profile</span></a>
                <a href="#"><span>Reviews</span></a>
                <a href="#"><span>orders</span></a>
                <a href="#" class="active"><span>My Address</span></a>
                <a href="#"><span>Settings</span></a>
            </div>
            <div class="page_content bg_gray">
                <div class="uo_header">
                    <div class="wrapper cf">
                        <div class="wbox ava">
                            <figure><img src="imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
                        </div>
                        <div class="main_info">
                            <h1>Helena Afrassiabi</h1>
                            <div class="midbox">
                                <h4>560 points</h4>
                                <div class="info_nav">
                                    <a href="#">Get Free Points</a>
                                    <span class="sepor"></span>
                                    <a href="#">Win iPad</a>
                                </div>
                            </div>
                            <div class="stat">
                                <div class="item">
                                    <div class="num">30</div>
                                    <div class="title">total orders</div>
                                </div>
                                <div class="item">
                                    <div class="num">14</div>
                                    <div class="title">total reviews</div>
                                </div>
                                <div class="item">
                                    <div class="num">0</div>
                                    <div class="title">total gifts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uo_body">
                    <div class="wrapper">
                        <div class="uofb cf">
                            <div class="l_col adrs">
                                <h2>Add New Address</h2>


                                @include('flash::message')

                                {!! Form::open(array(
                                    'id'=>'create',
                                    'action'=>['foodClubController@store'],
                                    'method'=>'POST',
                                    'class' => 'form-horizontal' )) !!}
                                @include ('foodClub.form')

                                {!! Form::close() !!}
                            </div>

                            <div class="r_col">
                                <h2>My Addresses</h2>
                                <div id="map"></div>
                                <div class="uo_adr_list">
                                    <script>
                                        var map = new GMaps({
                                            el: '#map',
                                            lat: -12.043333,
                                            lng: -77.028333
                                        });
                                    </script>
                                    <script>
                                        function close (classname) {
                                            $('.' + classname).remove();                                        }
                                    </script>

                                    @if (!empty($addresses))
                                        <div class="work item">
                                            <h3>Work Addresses</h3>
                                        @foreach( $addresses as $address )
                                                {{--<h3>{{ $address->name_id ? $address->name->name : 'n/a' }}</h3>--}}
                                                @if ($address->name == 'Work Address')
                                                    <p> {{ $address->city }}, {{ $address->area }}, {{ $address->street }},
                                                        {{ $address->house }}
                                                        @if (!empty($address->additional)), {{ $address->additional }}
                                                            @else {{ '' }} @endif</p>
                                                    <div class="actbox" >
                                                        <a onclick="self.close('work')" class="bcross"></a>
                                                    </div>
                                                @endif
                                        @endforeach
                                    </div>
                                    <div class="item home">
                                        <h3>Home Addresses</h3>
                                        @foreach( $addresses as $address )
                                            {{--<h3>{{ $address->name_id ? $address->name->name : 'n/a' }}</h3>--}}
                                            @if ($address->name == 'Home Address')

                                                <p>{{ $address->city }}, {{ $address->area }}, {{ $address->street }},
                                                    {{ $address->house }}
                                                    @if (!empty($address->additional)), {{ $address->additional }}
                                                    @else {{ '' }} @endif</p>
                                                <div class="actbox" id='close'>
                                                    <a onclick="self.close('home')" class="bcross"></a>
                                                </div>

                                            @endif
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="center_box">
            <div class="wrapper">

                <nav class="f_nav">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_1"></span></span>
                                <span class="title">Rewards Program</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_2"></span></span>
                                <span class="title">monthly lottery</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_3"></span></span>
                                <span class="title">Restaurant Owners</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_4"></span></span>
                                <span class="title">about foodclub</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bt_box">
            <div class="center_box">
                <div class="wrapper">
                    <div class="soc_link">
                        <a href="#" class="apple"></a>
                        <a href="#" class="android"></a>
                        <a href="#" class="email"></a>
                        <a href="#" class="fb"></a>
                    </div>
                    <div class="copyright">
                        <div>© 2014 Zomlex Inc. All rights reserved.</div>
                        <nav>
                            <a href="#">Partner Agreement</a>
                            <span>|</span>
                            <a href="#">User Agreement</a>
                            <span>|</span>
                            <a href="#">FAQ</a>
                            <span>|</span>
                            <a href="#">Careers</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
<body>

<div id="body">
    <h3>Basic</h3>
        <div class="row">
            <div class="span11">
                <div class="popin">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


{{--<script>--}}
    {{--new GMaps({--}}
        {{--div: '#map',--}}
        {{--lat: -12.043333,--}}
        {{--lng: -77.028333--}}
    {{--});--}}

    {{--map.addMarker({--}}
        {{--lat: -12.043333,--}}
        {{--lng: -77.028333,--}}
        {{--title: 'Lima',--}}
        {{--click: function(e) {--}}
            {{--alert('You clicked in this marker');--}}
        {{--}--}}
    {{--});</script>--}}



















{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title></title>--}}
    {{--<script src="http://maps.google.com/maps/api/js"></script>--}}
    {{--<script src="js/gmaps.js"></script>--}}
    {{--<style type="text/css">--}}
        {{--#map {--}}
            {{--width: 400px;--}}
            {{--height: 400px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="map"></div>--}}
{{--<script>--}}
    {{--var map = new GMaps({--}}
        {{--el: '#map',--}}
        {{--lat: -12.043333,--}}
        {{--lng: -77.028333--}}
    {{--});--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
