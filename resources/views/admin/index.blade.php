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

<div class="flexbox-container row">
    <div class="calender col-md-9 h-75">
        <main>
            <div class="container">
                <h3><a>&lt;</a>&nbsp;&nbsp;2018年 7月&nbsp;&nbsp;<a>&gt;</a></h3>
                <table class="table table-bordered">
                    <tr>
                        <th>日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                        <td class="today">13</td>
                        <td>14</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                    </tr>
                    <tr>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </main>
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


@endsection