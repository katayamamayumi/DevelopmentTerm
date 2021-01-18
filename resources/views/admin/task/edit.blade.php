<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <title>タスク</title>
</head>

<body>
    <h1>タスク</h1>
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
    <div class="container-fluid">
        <div>
            <div class="goal-description col-md-12 row">
                <div class="col-md-12">
                    <div class="bg-info text-white">実行宣言を入力してください</div>
                </div>
            </div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>タスク内容</th>
                <th>状態</th>
                <th>期限</th>
                <th>完了日</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td>
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td>
                    <input type="date"></input>
                </td>
                <td>
                    <input type="date"></input>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td>
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td>
                    <input type="date"></input>
                </td>
                <td>
                    <input type="date"></input>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td>
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td>
                    <input type="date"></input>
                </td>
                <td>
                    <input type="date"></input>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td>
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td>
                    <input type="date"></input>
                </td>
                <td>
                    <input type="date"></input>
                </td>
            </tr>
        </tbody>
        <tbody>
            <tr>
                <td>
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td>
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td>
                    <input type="date"></input>
                </td>
                <td>
                    <input type="date"></input>
                </td>
            </tr>
        </tbody>


        <table class="tbl-task">
            <tr class="thead">
                <th></th>
                <th>タスク内容</th>
                <th>状態</th>
                <th>期限</th>
                <th>完了日</th>
            </tr>
            <tr>
                <td>A</td>
                <td data-label="タスク内容">
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td data-label="状態">
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td data-label="期限">
                    <input type="date"></input>
                </td>
                <td data-label="完了日">
                    <input type="date"></input>
                </td>
            </tr>
            <tr>
                <td>B</td>
                <td data-label="タスク内容">
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td data-label="状態">
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td data-label="期限">
                    <input type="date"></input>
                </td>
                <td data-label="完了日">
                    <input type="date"></input>
                </td>
            </tr>
            <tr>
                <td>C</td>
                <td data-label="タスク内容">
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td data-label="状態">
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td data-label="期限">
                    <input type="date"></input>
                </td>
                <td data-label="完了日">
                    <input type="date"></input>
                </td>
            </tr>
            <tr>
                <td>D</td>
                <td data-label="タスク内容">
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td data-label="状態">
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td data-label="期限">
                    <input type="date"></input>
                </td>
                <td data-label="完了日">
                    <input type="date"></input>
                </td>
            </tr>
            <tr class="last">
                <td>E</td>
                <td data-label="タスク内容">
                    <input type="text" size="50" placeholder="タスクを入力してください">
                </td>
                <td data-label="状態">
                    <select name="status">
                        <option value="実行中">実行中</option>
                        <option value="未着手">未着手</option>
                        <option value="完了">完了</option>
                    </select>
                </td>
                <td data-label="期限">
                    <input type="date"></input>
                </td>
                <td data-label="完了日">
                    <input type="date"></input>
                </td>
            </tr>
        </table>
    </table>

    <form>
        <div>
            <input type="submit" class="btn btn-primary" value="登録">
        </div>
    </form>
</body>

<div class="flexbox-container row">
    <div class="col-md-9 h-75">
        <main>
            <p>カレンダー</P>
        </main>
    </div>

</div>


</body>

</html>