<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <meta name="description" content="Автостанция Луч">
    <meta name="theme-color" content="#317EFB"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=0.7, minimum-scale=0.1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автостанция Луч</title>

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
<script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
<!-- jQuery Mask Plugin -->
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
