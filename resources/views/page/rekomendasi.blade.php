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

        <h1 class="text-center">Pilih Kriteria Sekolah Yang Kamu Inginkan</h1>


        <div class="col-md-12 panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
            <div class="title">
                <form>
                    <input checked type="radio" name="jenis"> Negeri
                    <input type="radio" name="jenis"> Swasta
                </form>

                <form>
                    <input checked type="radio" name="tingkat"> SD
                    <input type="radio" name="tingkat"> SMP
                    <input type="radio" name="tingkat"> SMA
                </form>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh" aria-expanded="false" aria-controls="collapseTwo">
                        <h4 class="panel-title"> Biaya</h4>
                    </a>
                </div>
                <div id="aceh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul class="nav">
                            <li>
                                <input type="radio" name="biaya">> 500.000 </li>
                            <li>
                                <input type="radio" name="biaya">> 500.000 &lt; 1.000.000 </li>
                            <li>
                                <input type="radio" name="biaya">> &lt; 1.000.000 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">

                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali" aria-expanded="false" aria-controls="collapseTwo">
                        <h4 class="panel-title"> Ekstra Kulikuler Favorit</h4>
                    </a>
                </div>
                <div id="bali" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul class="nav">
                            <li>
                                <input type="radio" name="eskul">Seni Tari</li>
                            <li>
                                <input type="radio" name="eskul">Seni Musik</li>
                            <li>
                                <input type="radio" name="eskul">Pramuka</li>
                            <li>
                                <input type="radio" name="eskul">Sepak Bola</li>
                            <li>
                                <input type="radio" name="eskul">Bulu Tangkis</li>
                            <li>
                                <input type="radio" name="eskul">Basket</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navbar-right col-md-3 br">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Cari</button>
            </div>
        </div>
    </div>


 

    @include('component.footer')

    <script type="text/javascript" src="{{asset('/js/jquery-3.1.0.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>

</html>