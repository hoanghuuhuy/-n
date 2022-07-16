<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!--favicon-->
        <link rel="icon" href="images/favicon.jpg">
        
        <title>Backend @yield('title')</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-fixed/">
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/5.1/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    </head>
        
    <body class="d-flex flex-column min-vh-100">
        <header class="navbar navbar-expand-md navbar-dark bd-navbar">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img class="noo-logo-img noo-logo-normal" src="{{ asset('images/logo-removebg-preview.png') }}" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    @foreach(config('nav.admin.top') as $item)
                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == $item ['route'] ? 'active' : '' }}" href="{{ route($item ['route']) }}">{{ $item ['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        </header>
        
        <main class="my-auto p-5 container-fluid" role = "main">
            @yield('content')
        </main>

        <footer class="site-footer">
            <div class="text-center" style="text-align: center;font-size: 25px;">
                <div class="credits">
                    &copy; Đặc sản 3 miền</a>
                </div>
                <a href="javascript:;" class="go-top">
                <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://getbootstrap.com/docs/5.1/assets/js/docs.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>

        <script>
        $(function(){    
            $(document).ready(function() {
                $('.js-tags').select2();
            });
        })
        </script>

    </body>
</html>