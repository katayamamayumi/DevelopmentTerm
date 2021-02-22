<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/jquery-1.4.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/jquery-ui-1.8.2.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/date.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/lib/holidays.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.ganttView/jquery.ganttView.js') }}"></script> -->

    <!-- メンタリング後に入れてみた３行 -->
    <!-- <link href="{{ asset('js/fullcalendar-5.5.1/lib/main.css') }}" rel='stylesheet'> -->
    <!-- <script src="{{ asset('js/fullcalendar-5.5.1/lib/main.js') }}"></script> -->
    <!-- ここまで -->
</head>

<body>
    <title>@yield('title')</title>
    <h1>目標365</h1>

    <div id="app">
        <div>
            <nav class="navbar  navbar-default">
                <ul class="nav navbar-tabs">
                    <li class='nav-item'>
                        <a href='/admin' class='nav-link' active>TOP </a>
                    </li>
                    <li class=' nav-item'>
                        <a href='/admin/user/edit' class='nav-link' active>マイページ </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/userfollow/edit' class='nav-link' active>ユーザー応援 </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/task/edit' class='nav-link' active>タスク管理 </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/usermessage/edit' class='nav-link' active>最近登録した人 </a>

                    </li>
                    <li class='nav-item'>
                        <a href='/admin/goal/edit' class='nav-link' active>最近登録された目標 </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <main>
        @yield('content')
        <div id='calendar'></div>
    </main>

</body>