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
    <div class="container bs-docs-container br">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs br" role="tablist">
            <li role="presentation" class="active"><a href="#sma" aria-controls="sma" role="tab" data-toggle="tab"><h3>SMA</h3></a></li>
            <li role="presentation"><a href="#man" aria-controls="man" role="tab" data-toggle="tab"><h3>MAN</h3></a></li>
            <li role="presentation"><a href="#smk" aria-controls="smk" role="tab" data-toggle="tab"><h3>SMK</h3></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content br">
            <div role="tabpanel" class="tab-pane active" id="sma">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh</h4>
                                </a>
                            </div>
                            <div id="aceh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali</h4>
                                </a>
                            </div>
                            <div id="bali" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten</h4>
                                </a>
                            </div>
                            <div id="banten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh2</h4>
                                </a>
                            </div>
                            <div id="aceh2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali2</h4>
                                </a>
                            </div>
                            <div id="bali2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten2</h4>
                                </a>
                            </div>
                            <div id="banten2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh3" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh3</h4>
                                </a>
                            </div>
                            <div id="aceh3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali3" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali3</h4>
                                </a>
                            </div>
                            <div id="bali3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten33" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten3</h4>
                                </a>
                            </div>
                            <div id="banten3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="man">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh</h4>
                                </a>
                            </div>
                            <div id="aceh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali</h4>
                                </a>
                            </div>
                            <div id="bali" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten</h4>
                                </a>
                            </div>
                            <div id="banten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh2</h4>
                                </a>
                            </div>
                            <div id="aceh2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali2</h4>
                                </a>
                            </div>
                            <div id="bali2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten2</h4>
                                </a>
                            </div>
                            <div id="banten2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh3" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh3</h4>
                                </a>
                            </div>
                            <div id="aceh3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali3" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali3</h4>
                                </a>
                            </div>
                            <div id="bali3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten33" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten3</h4>
                                </a>
                            </div>
                            <div id="banten3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="smk">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh</h4>
                                </a>
                            </div>
                            <div id="aceh" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali</h4>
                                </a>
                            </div>
                            <div id="bali" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten</h4>
                                </a>
                            </div>
                            <div id="banten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh2</h4>
                                </a>
                            </div>
                            <div id="aceh2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali2</h4>
                                </a>
                            </div>
                            <div id="bali2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten2" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten2</h4>
                                </a>
                            </div>
                            <div id="banten2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#aceh3" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Aceh3</h4>
                                </a>
                            </div>
                            <div id="aceh3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                        <li><a href="sdn1.html"> SDN1 Aceh</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#bali3" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Bali3</h4>
                                </a>
                            </div>
                            <div id="bali3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                        <li><a href="sdn1.html"> SDN1 Bali</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">

                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#banten33" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title"> Banten3</h4>
                                </a>
                            </div>
                            <div id="banten3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <ul class="nav">
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                        <li><a href="sdn1.html"> SDN1 Banten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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