<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Datum | CRM Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin_files/assets/images/favicon.ico')}}"/>

    <link rel="stylesheet" href="{{asset('admin_files/assets/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_files/assets/css/backend.css?v=1.0.0')}}">
</head>
<body class="  ">

<style>

    .icon-container {
        white-space: nowrap; /* Запрещаем перенос элементов на новую строку */
    }

    .small-icon {
        width: 20px; /* Устанавливаем желаемую ширину для маленьких иконок */
        height: 20px; /* Устанавливаем желаемую высоту для маленьких иконок */
        margin-right: 10px; /* Добавляем небольшой отступ между иконками (по вашему усмотрению) */
        display: inline-block; /* Размещаем иконки в одном ряду */

    }

</style>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    @include('includes.sidebar')
    @include('includes.navbar')
    <div class="content-page">
        <div class="container-fluid">

            @if(session('notification'))
                <div class="toast fade show bg-success text-white border-0 rounded p-2 mt-3" role="alert"
                     aria-live="assertive" aria-atomic="true" id="notification_id">
                    <div class="toast-header bg-success text-white">
                        <svg class="bd-placeholder-img rounded mr-2" width="20" height="20"
                             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                             role="img">
                            <rect width="100%" height="100%" fill="#fff"></rect>
                        </svg>
                        <strong class="mr-auto text-white">Notification</strong>
                        <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast"
                                aria-label="Close"><span aria-hidden="true" onclick="close_notification()">×</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        {{session('notification')}}
                    </div>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
<!-- Wrapper End-->
<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                    <span class="mr-1">
                        Copyright
                        <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">Datum</a>
                        All Rights Reserved.
                    </span>
            </div>
        </div>
    </div>
</footer>    <!-- Backend Bundle JavaScript -->
<script src="{{asset('admin_files/assets/js/backend-bundle.min.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{asset('admin_files/assets/js/customizer.js')}}"></script>

<script src="{{asset('admin_files/assets/js/sidebar.js')}}"></script>

<!-- Flextree Javascript-->
<script src="{{asset('admin_files/assets/js/flex-tree.min.js')}}"></script>
<script src="{{asset('admin_files/assets/js/tree.js')}}"></script>

<!-- Table Treeview JavaScript -->
<script src="{{asset('admin_files/assets/js/table-treeview.js')}}"></script>

<!-- SweetAlert JavaScript -->
<script src="{{asset('admin_files/assets/js/sweetalert.js')}}"></script>

<!-- Vectoe Map JavaScript -->
<script src="{{asset('admin_files/assets/js/vector-map-custom.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('admin_files/assets/js/chart-custom.js')}}"></script>
<script src="{{asset('admin_files/assets/js/charts/01.js')}}"></script>
<script src="{{asset('admin_files/assets/js/charts/02.js')}}"></script>

<!-- slider JavaScript -->
<script src="{{asset('admin_files/assets/js/slider.js')}}"></script>

<!-- Emoji picker -->
<script src="{{asset('admin_files/assets/vendor/emoji-picker-element/index.js')}}" type="module"></script>

<!-- app JavaScript -->
<script src="{{asset('admin_files/assets/js/app.js')}}"></script>
<script>
    function close_notification()
    {
        document.getElementById('notification_id').outerHTML = '';
    }
</script>
</body>
</html>
