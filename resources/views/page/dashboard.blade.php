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
            <div class="jumbotron banner">
        <img src="{{ url('img/banner-bg.jpg') }}" alt="...">
        <div class="form-group nav navbar-nav navbar-right">
            <label for="exampleInputFile">Ganti sampul</label>
            <input type="file" id="exampleInputFile">
        </div>
        <h3 class="paddingleft">SMAN1 Bandung</h3>

    </div>
<div class="container-fluid br2">
        <div class="col-sm-3 col-md-2 sidebar bg-whitegray">
        <ul class="nav nav-sidebar br" role="tablist">
            <li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab"><h4>News</h4></a></li>
            <li role="presentation"><a href="#event" aria-controls="event" role="tab" data-toggle="tab"><h4>Event</h4></a></li>
			<li role="presentation"><a href="#profil" aria-controls="profil" role="tab" data-toggle="tab"><h4>Profil</h3></a></li>
            <li role="presentation"><a href="#fasilitas" aria-controls="fasilitas" role="tab" data-toggle="tab"><h4>Fasilitas</h4></a></li>
            <li role="presentation"><a href="#prestasi" aria-controls="prestasi" role="tab" data-toggle="tab"><h4>Prestasi</h4></a></li>
            <li role="presentation"><a href="#biaya" aria-controls="biaya" role="tab" data-toggle="tab"><h4>Biaya</h4></a></li>
            <li role="presentation"><a href="#kegiatan" aria-controls="kegiatan" role="tab" data-toggle="tab"><h4>Kegiatan</h4></a></li>
        </ul>
		</div>

        <!-- Tab panes -->
		<div class="col-sm-9">
        <div class="tab-content br">
            <div role="tabpanel" class="tab-pane active" id="news">
                <a class="btn btn-primary" href="{{ url('page/addnews') }}" role="button">Add News</a>
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
                            <a class="btn btn-default" href="{{ url('page/editnews') }}" role="button">Edit</a>
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
                            <a class="btn btn-default" href="{{ url('page/editnews') }}" role="button">Edit</a>
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
                            <a class="btn btn-default" href="{{ url('page/editnews') }}" role="button">Edit</a>
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
                        <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Edit</a>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="text-center">
                        <img class="img-circle" src="{{ url('img/ev1.jpg') }}" alt="Generic placeholder image" width="180" height="180">
                        <a href="{{ url('page/event1') }}"><h2>Pensi SMAN2 Bandung</h2></a>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        </div>
                        <a class="btn btn-default" href="{{ url('page/editevent') }}" role="button">Edit</a>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>
            <div role="tabpanel" class="tab-pane" id="profil">
                <!-- Three columns of text below the carousel -->
                <div class="col-md-12">
                <div class="row">
                    <a class="btn btn-primary" href="{{ url('page/editprofile') }}"role="button">Edit</a>
                    <h3 class="paddingleft">SMAN1 Bandung</h3>
                    <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device. Bootstrap (currently v3.3.7) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
                    <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device. Bootstrap (currently v3.3.7) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
                    <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device. Bootstrap (currently v3.3.7) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
                    <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device. Bootstrap (currently v3.3.7) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>
                </div><!-- /.row -->
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="fasilitas">
                <!-- Three columns of text below the carousel -->
                <div class="col-md-12">
                    <a class="btn btn-primary" href="{{ url('page/addfasilitas') }}" role="button">Add Fasilitas</a>
                    <div class="row br">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Aula</h4>
                            </div>
                            <div class="panel-body">
                                <div class="media-left media-middle">
                                    <a href="#">
                                       <img class="media-object fasilitas" src="{{ url('img/gb84.jpg') }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Untuk keperluan rapat seluruh siswa</h4>
                                </div>
                                <a class="btn btn-default navbar-right" href="{{ url('page/editfasilitas') }}" role="button">Edit</a>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Kolam renang</h4>
                            </div>
                            <div class="panel-body">
                                <div class="media-left media-middle">
                                    <a href="#">
                                       <img class="media-object fasilitas" src="{{ url('img/gb84.jpg') }}">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Untuk keperluan rapat seluruh siswa</h4>
                                </div>
                                <a class="btn btn-default navbar-right" href="{{ url('page/editfasilitas') }}"role="button">Edit</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
            <div role="tabpanel" class="tab-pane" id="prestasi">
                <!-- Three columns of text below the carousel -->
                <a class="btn btn-primary" href="{{ url('page/addprestasi') }}" role="button">Add Prestasi</a>
                <div class="row br">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">Juara 1</span>
                                Cerdas cermat tahun 2016
                            </li>
                            <a class="btn btn-default" href="{{ url('page/editprestasi') }}" role="button">Edit</a>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">Juara 2</span>
                                Fusal tingkat nasional
                            </li>
                            <a class="btn btn-default" href="{{ url('page/editprestasi') }}" role="button">Edit</a>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">Juara 1</span>
                                Catur tingkat SMA
                            </li>
                            <a class="btn btn-default" href="{{ url('page/editprestasi') }}" role="button">Edit</a>
                        </ul>
                    </div>

                </div><!-- /.row -->
            </div>
            <div role="tabpanel" class="tab-pane" id="biaya">
                <!-- Three columns of text below the carousel -->
                <div class="col-md-12">
                    <a class="btn btn-primary" href="{{ url('page/editbiaya') }}" role="button">Edit</a>
                <div class="row br">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Biaya Sekolah</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 200.000 / bulan
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4>Biaya Pembangunan</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4>Biaya Pakaian</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Biaya Buku</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                </div><!-- /.row -->
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="kegiatan">
                <!-- Three columns of text below the carousel -->
                <div class="col-md-6">
                    <a class="btn btn-primary" href="{{ url('page/editkegiatan') }}" role="button">Edit</a>
                <div class="row br">
                   <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Pramuka</li>
                        <li class="list-group-item list-group-item-info">Sepak bola</li>
                        <li class="list-group-item list-group-item-warning">Catur</li>
                        <li class="list-group-item list-group-item-danger">Seni Tari</li>
                    </ul>
                    </div>
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