<!DOCTYPE html>
<html>

<head>
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
</head>

<body>

    @include('component.navdashboard')
<div class="container-fluid br2">
        <div class="col-sm-3 col-md-2 sidebar bg-whitegray">
        <ul class="nav nav-sidebar br" role="tablist">
            <li role="presentation" class="active"><a href="#user" aria-controls="user" role="tab" data-toggle="tab"><h4>User</h4></a></li>
            <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab"><h4>News</h3></a></li>
            <li role="presentation"><a href="#event" aria-controls="event" role="tab" data-toggle="tab"><h4>Event</h4></a></li>
			
        </ul>
		</div>

        <!-- Tab panes -->
		<div class="col-sm-9">
        <div class="tab-content br">
            <div role="tabpanel" class="tab-pane active" id="user">
                <div class="col-md-6">
                <div class="row br">
                   <ul class="list-group">
                        <li class="list-group-item list-group-item-success">SMK N 2 Bandung
                            <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Hapus</a>
                        </li>
                        <li class="list-group-item list-group-item-info">SMAN 2 Bandung
                            <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Hapus</a>
                        </li>
                        <li class="list-group-item list-group-item-warning">SMAN 1 Medan
                            <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Hapus</a>
                        </li>
                        <li class="list-group-item list-group-item-danger">SDN 1 Jakart
                            <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Hapus</a>
                        </li>
                    </ul>
                    </div>
                </div><!-- /.row -->
                
            </div>
            <div role="tabpanel" class="tab-pane" id="news">
                <div class="row br">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                        <img src="{{ url('img/cth1.jpg') }}">
                            <div class="caption white">
                                <a class="title white" href="{{ url('page/berita1') }}">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G
                                    lyphicons Halflings are normally not available for free, but their creator has made t
                                    hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                            <a class="btn btn-default" href="{{ url('page/editnews') }}" role="button">Hapus</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                        <img src="{{ url('img/cth1.jpg') }}">
                            <div class="caption white">
                                <a class="title white" href="{{ url('page/berita1') }}">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G
                                    lyphicons Halflings are normally not available for free, but their creator has made t
                                    hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                            <a class="btn btn-default" href="{{ url('page/editnews') }}" role="button">Hapus</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail card">
                        <img src="{{ url('img/cth1.jpg') }}">
                            <div class="caption white">
                                <a class="title white" href="{{ url('page/berita1') }}">SMAN1 Bandung LKS 2016</a>
                                <p>1 january 2016</p>
                                <p>Includes over 250 glyphs in font format from the Glyphicon Halflings set. G
                                    lyphicons Halflings are normally not available for free, but their creator has made t
                                    hem available for Bootstrap free of cost. As a thank you, we only ask that yo.....</p>
                            </div>
                            <a class="btn btn-default" href="{{ url('page/editnews') }}" role="button">Hapus</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="event">
                <!-- Three columns of text below the carousel -->
                <a class="btn btn-primary" href="{{ url('page/addevent') }}" role="button">Add Event</a>
                <div class="row br">
                    <div class="col-sm-6 col-md-4">
                        <div class="text-center">
                        <img class="img-circle" src="{{ url('img/ev1.jpg') }}" alt="Generic placeholder image" width="180" height="180">
                        <a href="{{ url('page/event1') }}"><h2>Pensi SMAN2 Bandung</h2></a>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        </div>
                        <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Hapus</a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="text-center">
                        <img class="img-circle" src="{{ url('img/ev1.jpg') }}" alt="Generic placeholder image" width="180" height="180">
                        <a href="{{ url('page/event1') }}"><h2>Pensi SMAN2 Bandung</h2></a>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        </div>
                        <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Hapus</a>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>
        </div>
		</div>
    </div>
    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>

</html>