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
    </main>

</body>