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
        <h1 class="text-center"> Hasil Perbandingkan Sekolah</h1>
        <div class="col-md-5">
            <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Nama sekolah</h4>
                        </div>
                        <div class="panel-body">
                            SMA N 1 Medan
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4>Jenis Sekolah</h4>
                        </div>
                        <div class="panel-body">
                            Negeri
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Biaya Sekolah</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Fasilitas</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Prestasi</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Kegiatan</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                </div>
        
        </div>
        <div class="col-md-1">
        </div>
        
        <div class="col-md-5">
            <div class="row">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Nama sekolah</h4>
                        </div>
                        <div class="panel-body">
                            SMA N 1 Medan
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4>Jenis Sekolah</h4>
                        </div>
                        <div class="panel-body">
                            Negeri
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Biaya Sekolah</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Fasilitas</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Prestasi</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>Kegiatan</h4>
                        </div>
                        <div class="panel-body">
                            Rp. 500.000
                        </div>
                    </div>
                </div>
        
        </div>

    </div>
    @include('component.footer')

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>

</html>