<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <title>目標365</title>
</head>

<body>
    <h1>目標365</h1>
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
                <div class="col-md-10">
                    <div class="bg-info text-white">目標＋説明</div>
                </div>
            </div>
        </div>
    </div>


    </div>

    <div class="goal-items col-md-10 row">
        <div class="col-md-3">
            <div class="bg-info text-white">実行宣言期限まであと何日</div>
        </div>
        <div class="col-md-3 ">
            <div class="bg-primary text-white">期限が近づいている目標</div>
        </div>
        <div class="col-md-3 ">
            <div class="bg-info text-white">○月○日までの目標件数</div>
        </div>

        <div class="col-md-3 ">
            <div class="bg-primary text-white">未完了目標件数</div>
        </div>
    </div>
    </div>

    <div class="flexbox-container">
        <div class="calender col-md-10 row">
            <main>
                <p>カレンダー</P>
            </main>
        </div>

        <aside>
            <div class="rounded">
                <h4>マイアカウント</h4>
                <div>ニックネーム</div>
                <div>誕生日</div>
                <div>性別</div>
                <div>年齢</div>
                <div>趣味</div>
                <div>ひとこと</div>
                <a href='http://localhost:8000/admin/user' class='nav-link' active>マイアカウントの編集</a>
            </div>

            <div class="rounded">
                <h4>応援してくれているユーザー</h4>
                <div>日時</div>
                <div>応援メッセージ</div>
                <div>応援メッセージ</div>
                <div>応援メッセージ</div>
                <a href='http://localhost:8000/admin/usermessage' class='nav-link' active>もっと見る</a>
            </div>

            <div class="rounded">
                <h4>新規登録ユーザー</h4>
                <div>新着</div>
                <div>ユーザー名を反映</div>
                <div>ユーザー名を反映</div>
                <div>ユーザー名を反映</div>
            </div>

            <div class="rounded">
                <h4>目標達成完了ユーザー</h4>
                <div>新着</div>
                <div>ユーザー名を反映</div>
                <div>ユーザー名を反映</div>
                <div>ユーザー名を反映</div>
            </div>

            <div class="rounded">
                <h4>年齢の近いユーザー</h4>
                <div>ユーザー名を反映</div>
                <div>ユーザー名を反映</div>
                <div>ユーザー名を反映</div>
            </div>

        </aside>
    </div>

    <div class="flexbox-container">
        <article>
            本日の名言<br>
            <div>本日の名言を取得</div>
        </article>
    </div>



</body>

</html>