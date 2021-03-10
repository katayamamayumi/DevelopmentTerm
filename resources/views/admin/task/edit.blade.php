<!DOCTYPE html>
@extends('layouts.admin')

@section('title', 'タスク')

@section('content')


<div class="container-fluid">
    <div>
        <div class="goal-description col-md-12 row">
            <div class="col-md-12">
                <div class="bg-info text-white">実行宣言を入力してください</div>
            </div>
        </div>
    </div>
</div>


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
</div>
@endsection