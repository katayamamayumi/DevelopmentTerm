<!DOCTYPE html>
@extends('layouts.admin')

@section('title', 'マイページ')

@section('content')

<div class="form-group row">
    <div class="myaccount">
        <img src="https://www.homepage-tukurikata.com/image/lion.jpg" title="lion" alt="マイアカウント画像">
        <input type="file" class="form-control-file" name="image_path_thumbnail">
    </div>
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
    <label class="col-md-2" for="birthday">誕生日</label>
    <div class="col-md-4">
        <input type="date" class="form-control" name="birthday" value="{{ old('hobby') }}">
    </div>
</div>
<div class="form-group row">
    <label class="col-md-2" for="age">年齢</label>
    <div class="col-md-4">
        <input type="text" class="form-control" name="age" value="{{ old('gender') }}">
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

<form>
    <div>
        <input type="submit" class="btn btn-primary" value="登録">
    </div>
</form>


<!-- <table class="support">
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
</table> -->


@endsection