
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')

    <style type="text/css">
        .ajax-load{
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    @include('includes.navigation')
</nav>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">
    @include('includes.header')

</div>
<!-- /.intro-header -->

<!-- Page Content -->

<a  name="services"></a>
@yield('content')
<!-- /.content-section-a -->

<a  name="contact"></a>
<div class="banner">
    @include('includes.banner')
</div>

<!-- /.banner -->

<!-- Footer -->
<footer>
    @include('includes.footer')
</footer>

<!-- jQuery -->
<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/js.js')}}"></script>


</body>

</html>
