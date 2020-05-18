@extends('layouts.app')
<html>
<head>
<style>
.card-2{
    width: 750px;
    margin-left: 25%;
    height: 400px;
}
</style>
</head>
<body>
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home" style="color: yellow; font-size: 18px;">Lessons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/assignment" style="color: white; font-size: 18px;">Assignment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/livestreaming" style="color: white; font-size: 18px;">Live Streaming</a>
                </li>
                </ul>
            </div>
</nav>
<br>
<br>
<div class="card card-2 text-center">
    <div class="card-header" style="text-align: left; background-color: white;">
        <b style="font-size: 15px;">Practice Test Completed </b>
        <h6>Congratulations ! You have scored 67% in the test </h6>
    </div>
    <div class="card-body card-body-2" style="background-color: #EEF3FF">
        <p class="card-text text-center" style="margin-top: 5%;"><b style="font-size: 20px;">Analysis of the exam to be shown here. Aspects like Number of Questions, Marks, Correct answers</b></p>
    </div>
    <div class="card-footer">
        <button type="button" class="btn btn-light" style="float: right; border: solid 1px blue;" onclick="location.href='/english'">Exit</button>
        <button type="button" class="btn btn-primary" style="float: right; margin-right: 5%" onclick="location.href='/questions'">Check Answers</button>
    </div>
</div>
@endsection
</body>
</div>