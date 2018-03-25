@include('layout.header')
@section('additional-css')
    <link href="{{ asset('css/login-register-lock.css') }}" rel="stylesheet">
@show

<body class="skin-megna card-no-border">

    @include('global_modules.preloader')

    @yield('auth-form')

    @include('layout.bottom')
    @section('additional-js')
        <script type="text/javascript">
            // ==============================================================
            // Login and Recover Password
            // ==============================================================
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
        </script>
    @endsection
</body>
