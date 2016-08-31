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
    <div class="container bs-docs-container br2">
        
    <a class="btn btn-primary br2" href="dashboard.html" role="button">Kembali ke dashboard</a>
    <a class="btn btn-primary br2" href="dashboard.html" role="button">Hapus</a>
        <div class="form-group">
        <label for="exampleInputFile">Ganti gambar</label>
        <input type="file" id="exampleInputFile">
    </div>
        <div class="col-sm-12 br">
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" placeholder="Judul">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Isi</label>
                <textarea class="form-control" rows=8></textarea>
            </div>
            <a class="btn btn-primary navbar-right" href="dashboard.html" role="button">Save Edit</a>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>
</html>