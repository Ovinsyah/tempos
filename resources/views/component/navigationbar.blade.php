<div class="navigationbar">
    <!--    Navigation-->
    <nav class="navbar bg-bluegray navbar-default default navbar-fixed-top white">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand"><a href="index.html">Wempos</a></div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav white">
                    <li class="dropdown">
                        <a href="daftarsekolah.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Sekolah <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('page.sd') }}">SD</a></li>
                            <li><a href="smp.html">SMP</a></li>
                            <li><a href="sma.html">SMA</a></li>
                        </ul>
                    </li>
                    <li><a href="bandingkan.html">Bandingkan</a></li>
                    <li><a href="rekomendasi.html">Rekomendasi</a></li>

                </ul>
                <ul class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login</button>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <!-- /Navigation -->




    <!--    Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="form-signin-heading">Please sign in</h2>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="email" class="form-control" placeholder="Email address" required autofocus>
                        <input type="password" class="form-control" placeholder="Password" required>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>