<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <title>目標</title>
</head>

<body>
    <h1>目標</h1>
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
    <table class="support">
        <thead>
            <tr>
                <th>最近登録した人</th>
                <th>最近登録された目標</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td height="500">
                    <p>取得</p>
                </td>
                <td height="500">
                    <p>取得</p>
                </td>
            </tr>
        </tbody>
    </table>

</html>