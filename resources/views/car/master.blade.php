<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Demo">
    <meta name="author" content="godwin668@gmail.com">
    <link rel="icon" href="/favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/static/car/css/list.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">主页</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">全部二手车</a></li>
                <li><a href="#">其他</a></li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            @yield('content')
            {{--
            <div class="row">
                <div class="col-xs-2">
                    <h2>图片</h2>
                    <p>图片在这里</p>
                </div><!--/.col-xs-2-->
                <div class="col-xs-6">
                    <h2>标题</h2>
                    <p>标题和摘要在这里</p>
                </div><!--/.col-xs-6-->
                <div class="col-xs-2">
                    <h2>价格</h2>
                    <p>价格在这里</p>
                </div><!--/.col-xs-2-->
                <div class="col-xs-2">
                    <h2>质保</h2>
                    <p>质保在这里</p>
                </div><!--/.col-xs-2-->
            </div>
            <!--/row-->
            --}}
        </div>
        <!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
            <div class="list-group">
                @yield('sidebar')
                {{--
                <h2>热门车源</h2>
                <a href="#" class="list-group-item active">广告位</a>
                <a href="#" class="list-group-item">广告位</a>
                <a href="#" class="list-group-item">广告位</a>
                <a href="#" class="list-group-item">广告位</a>
                <a href="#" class="list-group-item">广告位</a>
                --}}
            </div>
        </div>
        <!--/.sidebar-offcanvas-->
    </div>
    <!--/row-->

    <hr>

    <footer>
        <p>&copy; Company 2015</p>
    </footer>

</div>
<!--/.container-->

<!-- JavaScript
================================================== -->
<script src="/static/jquery/js/jquery-1.11.3.min.js"></script>
<script src="/static/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>