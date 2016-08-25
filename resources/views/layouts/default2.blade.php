
<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">

</nav>


<!-- Header -->
<a name="about"></a>
<div class="intro-header">

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
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
