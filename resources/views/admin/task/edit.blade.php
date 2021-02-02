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


</div>

@endsection