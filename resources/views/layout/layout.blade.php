<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">

</head>
<body>
    @section('header')
  <div class="header"><p class="move-text">BREAKING NEWS</p></div>
    @show
    @yield('news')
    @section('footer')
    <div class="footer">&#169NNN</div>
    @show
</body>
</html>