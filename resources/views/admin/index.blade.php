<!DOCTYPE html>
@extends('layouts.admin')

@section('title', 'TOP')

@section('content')

<div class="container-fluid">
    <div>
        <div class="goal-description col-md-12 row">
            <div class="col-md-10">
                <div class="bg-info text-white">目標＋説明</div>
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
<div style="margin-top:30px; border:1px solid gray;">
    <form id="form" action="">
        <p><input type="text" name="title" placeholder="タイトル入力"></p>
        <p><input type="date" name="start" placeholder="日付入力"></p>
        <p><input type="color" name="color"></p>
    </form>

    <button id="bt2">
        Ajax->DBにPostテスト
    </button>
</div>

<div class='flex-container'>
    <div style="margin:10px">
        <div class="calendar-area">
            <div id='calendar'></div>
        </div>
    </div>

    <aside>
        <div class="rounded">
            <h4>マイアカウント</h4>
            <img src="https://www.homepage-tukurikata.com/image/lion.jpg" style="border-radius:50%;" width="70" height="70" title="lion" alt="アカウント画像">
            <div>ニックネーム</div>
            <div>誕生日</div>
            <div>性別</div>
            <div>年齢</div>
            <div>趣味</div>
            <div>ひとこと</div>
            <a href='/admin/user' class='nav-link' active>マイアカウントの編集</a>
        </div>

        <div class=" rounded">
            <h4>応援してくれているユーザー</h4>
            <div>日時</div>
            <div>応援メッセージ</div>
            <div>応援メッセージ</div>
            <div>応援メッセージ</div>
            <a href='/admin/usermessage' class='nav-link' active>もっと見る</a>
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

</div>

@endsection