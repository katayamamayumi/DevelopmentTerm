<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <title>マイページ</title>
</head>

<body>
    <h1>マイページ</h1>
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
    <div class="form-group row">
        <label class="col-md-2" for="name">ニックネーム</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="gender">性別</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="gender" value="{{ old('hobby') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="age">年齢</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="age" value="{{ old('gender') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="birthday">誕生日</label>
        <div class="col-md-4">
            <input type="date" class="form-control" name="birthday" value="{{ old('hobby') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="hobby">趣味</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="hitokoto">ひとこと</label>
        <div class="col-md-10">
            <input type="text" class="form-control" name="hitokoto" value="{{ old('hobby') }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2" for="title">画像</label>
        <div class="col-md-10">
            <input type="file" class="form-control-file" name="image">
        </div>
    </div>
    <form>
        <div>
            <input type="submit" class="btn btn-primary" value="登録">
        </div>
    </form>


    <table class="support">
        <thead>
            <tr>
                <th>あなたがサポートしている人</th>
                <th>あなたのサポーターになってくれている人</th>
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


</body>

</html>