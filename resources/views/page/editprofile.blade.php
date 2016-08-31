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
        
    <a class="btn btn-primary br2" href="{{ url('page/dashboard') }}" role="button">Kembali ke dashboard</a>
        <div class="col-sm-12 br">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Sekolah</label>
                <input type="text" class="form-control" placeholder="Nama Sekolah">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi profile sekolah</label>
                <textarea class="form-control" rows=8></textarea>
            </div>
            <a class="btn btn-primary navbar-right" href="{{ url('page/dashboard') }}" role="button">Save Edit</a>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>
</html>