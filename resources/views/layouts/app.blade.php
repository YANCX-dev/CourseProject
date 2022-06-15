<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Луч</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
@include('inc.navbar')
    @yield('content')
@include('inc.footer')
</body>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="resources/js/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery Mask Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
    $(function() {
        let phone = $('#phone')

        phone.each((index,item)=>{
            console.log(item)
            item.mask('+7(000)000-00-00');
        })
    });
</script>
</html>

@stack('child-script')
