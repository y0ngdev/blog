<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>My Blog</title>
    <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="build/assets/images/favicon.png">

    <!-- STYLES -->
    <link rel="stylesheet" href="/build/assets/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/build/assets/css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/build/assets/css/slick.css" type="text/css" media="all">
    <link rel="stylesheet" href="/build/assets/css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="/build/assets/css/style.css" type="text/css" media="all">

    @vite([''])
</head>

<body>

<!-- site wrapper -->
<div class="site-wrapper">

    <div class="main-overlay"></div>

    @include('partials/_post-header')

    {{$slot}}

    <!-- footer -->
    <footer>
        <div class="container-xl">
            <div class="footer-inner">
                <div class="row d-flex align-items-center gy-4">
                    <!-- copyright text -->
                    <div class="col-md-4">
                        <span class="copyright">© My Blog.</span>
                    </div>

                    <div class="col-md-4 text-center"></div>

                    <!-- go to top button -->
                    <div class="col-md-4">
                        <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>
    <!-- content -->
    <div class="search-content">
        <div class="text-center">
            <h3 class="mb-4 mt-0">Press ESC to close</h3>
        </div>
        <!-- form -->
        <form class="d-flex search-form">
            <input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
            <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
        </form>
    </div>
</div>


<!-- JAVA SCRIPTS -->
<script src="/build/assets/js/jquery.min.js"></script>
<script src="/build/assets/js/jquery.sticky-sidebar.min.js"></script>
<script src="/build/assets/js/popper.min.js"></script>
<script src="/build/assets/js/bootstrap.min.js"></script>
<script src="/build/assets/js/slick.min.js"></script>

<script src="/build/assets/js/custom.js"></script>

</body>
</html>
