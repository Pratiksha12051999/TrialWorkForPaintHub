<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
}
.bg {
  background-image: url("https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
  height: 30%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.subjectcard{
    font-family: Gill Sans,Gill Sans MT,Calibri;
    color:white;
    width: 230px;
    font-size: 18px;
    height: 220px;
    border-radius: 20px;
    background-color:blue;
    margin: 20px;
}
.ScrollStyle
{
    height: 480px;
    overflow-y: scroll;
    overflow-x: hidden;
}
.card-text{
    margin: 5px;
}
::-webkit-scrollbar {
    width: 5px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    height: 15px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
.card-header{
    height: 40px;
}
.tiny-card-body{
    height: 40px;
}
.headertext{
    font-family: Gill Sans,Gill Sans MT,Calibri;
    font-size: 15px;
    color: black;
}
.roundcheckbox{
    width: 1.1em;
    height: 1.1em;
    background-color: white;
    border-radius: 50%;
    vertical-align: middle;
    border: 1px solid #ddd;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
}
.roundcheckbox:checked {
    background-color: green;
}
</style>
</head>
<body>
@extends('layouts.app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home" style="color: white; font-size: 18px;">Lessons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/assignment" style="color: yellow; font-size: 18px;">Assignment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/livestreaming" style="color: white; font-size: 18px;">Live Streaming</a>
                </li>
                </ul>
            </div>
</nav>
<div class="bg"></div>
<br>
<div class="container ScrollStyle">
<br>
<p style="color: blue; font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 18px;"> Name of the Topic </p>
<div class="card-deck">

    <div class="card subjectcard">
        <a href="/video" class="custom-card">
        <div class="card-header">
            <p class="headertext">Video
            <input type="checkbox" class="roundcheckbox" style="float: right;"></p>
        </div>
        <img class="card-img-top" src="https://images.pexels.com/photos/1595822/pexels-photo-1595822.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Card image cap">
        <div class="tiny-card-body">
            <p class="card-text" style="font-size:13px;color:black;font-family: Gill Sans,Gill Sans MT,Calibri;">Name of the topic is shown here</p>
        <small style="color: grey; font-size: 10px; text-align: right; margin-right: 10px;float: right;">2 min</small>
        </div>
        </a>
    </div>
    <div class="card subjectcard">
        <div class="card-header">
            <p class="headertext">Video
            <input type="checkbox" class="roundcheckbox" style="float: right;"></p>
        </div>
        <img class="card-img-top" src="https://images.pexels.com/photos/1595822/pexels-photo-1595822.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Card image cap">
        <div class="tiny-card-body">
            <p class="card-text" style="font-size:13px;color:black;font-family: Gill Sans,Gill Sans MT,Calibri;">Name of the topic is shown here</p>
        </div>
        <small style="color: grey; font-size: 10px; text-align: right; margin-right: 10px;">2 min</small>
    </div>
    <div class="card subjectcard">
        <div class="card-header">
            <p class="headertext">Video
            <input type="checkbox" class="roundcheckbox" style="float: right;"></p>
        </div>
        <img class="card-img-top" src="https://images.pexels.com/photos/1595822/pexels-photo-1595822.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Card image cap">
        <div class="tiny-card-body">
            <p class="card-text" style="font-size:13px;color:black;font-family: Gill Sans,Gill Sans MT,Calibri;">Name of the topic is shown here</p>
        </div>
        <small style="color: grey; font-size: 10px; text-align: right; margin-right: 10px;">2 min</small>
    </div>
    <div class="card subjectcard">
        <div class="card-header">
            <p class="headertext">Video
            <input type="checkbox" class="roundcheckbox" style="float: right;"></p>
        </div>
        <img class="card-img-top" src="https://images.pexels.com/photos/1595822/pexels-photo-1595822.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Card image cap">
        <div class="tiny-card-body">
            <p class="card-text" style="font-size:13px;color:black;font-family: Gill Sans,Gill Sans MT,Calibri;">Name of the topic is shown here</p>
        </div>
        <small style="color: grey; font-size: 10px; text-align: right; margin-right: 10px;">2 min</small>
    </div>
    <div class="card subjectcard">
        <div class="card-header">
            <p class="headertext">Video
            <input type="checkbox" class="roundcheckbox" style="float: right;"></p>
        </div>
        <img class="card-img-top" src="https://images.pexels.com/photos/1595822/pexels-photo-1595822.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="Card image cap">
        <div class="tiny-card-body">
            <p class="card-text" style="font-size:13px;color:black;font-family: Gill Sans,Gill Sans MT,Calibri;">Name of the topic is shown here</p>
        </div>
        <small style="color: grey; font-size: 10px; text-align: right; margin-right: 10px;">2 min</small>
    </div>
</div>
</div>

@endsection
</body>
</html>