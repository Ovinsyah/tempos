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
<div class="container bs-docs-container br2">
        <h1 class="text-center">Hasil Pencarian : SMAN 2</h1>
                <div class="col-md-12">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>SMAN 2 Padang</h4>
                            </div>
                            <div class="panel-body">
                                <div class="media-left media-middle">
                                    <a href="#">
                                       <img class="media-object fasilitas" src="{{ url('img/gb84.jpg') }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">blablabla</h4>
                                    
                                </div>
                                <button class="btn btn-default navbar-right">Lihat</button>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>SMAN 2 Medan</h4>
                            </div>
                            <div class="panel-body">
                                <div class="media-left media-middle">
                                    <a href="#">
                                       <img class="media-object fasilitas" src="{{ url('img/gb84.jpg') }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">blablabla</h4>
                                    
                                </div>
                                <button class="btn btn-default navbar-right">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
        
    </div>
    @include('component.footer')

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>

</html>