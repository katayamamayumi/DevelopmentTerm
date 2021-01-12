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
                    <a href='http://localhost:8000/admin' class='nav-link' active>TOP </a>
                </li>
                <li class=' nav-item'>
                    <a href='http://localhost:8000/admin/users' class='nav-link' active>マイページ </a>

                </li>
                <li class='nav-item'>
                    <a href='http://localhost:8000/admin/userfollow' class='nav-link' active>ユーザー応援 </a>

                </li>
                <li class='nav-item'>
                    <a href='http://localhost:8000/admin/task' class='nav-link' active>タスク管理 </a>

                </li>
                <li class='nav-item'>
                    <a href='http://localhost:8000/admin/usermessage' class='nav-link' active>最近登録した人 </a>

                </li>
                <li class='nav-item'>
                    <a href='http://localhost:8000/admin/goal' class='nav-link' active>最近登録された目標 </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container-fluid">
        <div>
            <div class="goal-description col-md-12 row">
                <div class="col-md-12">
                    <div class="bg-info text-white">実行宣言を入力してください</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div>
            <div class="task-list col-md-12 row">
                <div class="col-md-3">
                    <div class="bg-info text-white">タスク内容</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">状態</div>
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">期限</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">完了日</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">タスク内容</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">状態</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">期限</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">完了日</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">タスク内容</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">状態</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">期限</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">完了日</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">タスク内容</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">状態</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">期限</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">完了日</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">タスク内容</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">状態</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">期限</div>
                </div>
                <div class="col-md-3">
                    <div class="bg-info text-white">完了日</div>
                </div>
            </div>
        </div>
        <input type="submit" value="登録">
    </div>




</body>






</html>