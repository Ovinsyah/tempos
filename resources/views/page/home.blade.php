<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>

<body>

    @include('component.navigationbar') 
    @include('component.carousel')
    <div class="container bs-docs-container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs br" role="tablist">
            <li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab"><h3>News</h3></a></li>
            <li role="presentation"><a href="#event" aria-controls="event" role="tab" data-toggle="tab"><h3>Event</h3></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content br">
            <div role="tabpanel" class="tab-pane active" id="news">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                            <img src="img/cth1.jpg">
                            <div class="caption white">
                                <a class="title white" href="berita1.html">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G lyphicons Halflings are normally not available for free, but their creator has made t hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                            <img src="img/cth1.jpg">
                            <div class="caption white">
                                <a class="title white" href="berita1.html">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G lyphicons Halflings are normally not available for free, but their creator has made t hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                            <img src="img/cth1.jpg">
                            <div class="caption white">
                                <a class="title white" href="berita1.html">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G lyphicons Halflings are normally not available for free, but their creator has made t hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                            <img src="img/cth1.jpg">
                            <div class="caption white">
                                <a class="title white" href="berita1.html">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G lyphicons Halflings are normally not available for free, but their creator has made t hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                            <img src="img/cth1.jpg">
                            <div class="caption white">
                                <a class="title white" href="berita1.html">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G lyphicons Halflings are normally not available for free, but their creator has made t hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="event">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-sm-6 col-md-4 text-center">
                        <img class="img-circle" src="img/ev1.jpg" alt="Generic placeholder image" width="180" height="180">
                        <h2>Pensi SMAN2 Bandung</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-default" href="event1.html" role="button">Rad more</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-4 text-center">
                        <img class="img-circle" src="img/ev1.jpg" alt="Generic placeholder image" width="180" height="180">
                        <h2>Pensi SMAN2 Bandung</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-default" href="event1.html" role="button">Rad more</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-4 text-center">
                        <img class="img-circle" src="img/ev1.jpg" alt="Generic placeholder image" width="180" height="180">
                        <h2>Pensi SMAN2 Bandung</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-default" href="event1.html" role="button">Rad more</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-4 text-center">
                        <img class="img-circle" src="img/ev1.jpg" alt="Generic placeholder image" width="180" height="180">
                        <h2>Pensi SMAN2 Bandung</h2>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <p><a class="btn btn-default" href="event1.html" role="button">Rad more</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    @include('component.footer')

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>

</html>