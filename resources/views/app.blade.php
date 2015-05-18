<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Siyaleader Intranet</title>
        <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/assets/css/login.css') }}">
    </head>
    <body>
    <div id='wrapper'>

                <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/img/logo/small.png') }}" alt="" height="40">

                </a>
                <a class="navbar-brand">SIYALEADER INTRANET </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                @if (!Auth::guest())
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Admin</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Welcome to Field Support Console</div>
                            </a>
                        </li>

                    </ul>
                    <!-- /.dropdown-messages -->
                </li>

            </ul>

            @endif
            <!-- /.navbar-static-side -->
        </nav>

    </div>

	 @yield('content')


  	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src='{{ asset('/assets/js/vendor/jquery-1.10.1.min.js') }}'><\/script>")</script>
        <script type="text/javascript" src="{{ asset('/assets/js/vendor/bootstrap.min.js') }}"></script>

    </body>
</html>

