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
        <div class="col-md-7">
        </div>
        <div class="br2 col-md-5">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Sekolah" required autofocus>
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option>SD</option>
                    <option>MIN</option>
                    <option>SMP</option>
                    <option>MTS</option>
                    <option>SMA</option>
                    <option>SMK</option>
                    <option>MAN</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Provinsi" required autofocus>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Kota" required autofocus>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Alamat" required autofocus>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nomor Pokok Sekolah Nasional" required autofocus>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="KOde Pos" required autofocus>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Pengguna" required autofocus>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Konfirmasi Password" required autofocus>
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Check me out
                    </label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
              
            
            
            
            
            
            
            
            
            
            
            
        </div>
    </div>
    @include('component.footer')

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>

</html>