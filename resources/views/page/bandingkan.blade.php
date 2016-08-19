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
        <h1 class="text-center">Bandingkan Sekolah Yang Kamu Inginkan</h1>

        <form>
            <div class="br2 col-md-4">
                <input type="text" class="form-control" placeholder="Sekolah 1" required autofocus>
            </div>
            <div class="br2 col-md-4">
                <a href="{{ url('page/bandingkan2') }}" class="btn btn-lg btn-primary btn-block" type="submit">Bandingkan</a>
            </div>
            <div class="br2 col-md-4">
                <input type="text" class="form-control" placeholder="Sekolah 2" required autofocus>
            </div>

        </form>
    </div>
    @include('component.footer')

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>

</html>