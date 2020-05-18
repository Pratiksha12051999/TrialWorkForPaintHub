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
<div class="jumbotron" style="background-color: white;">
  <p style="float: right;"> Time Left : 04:53 Mins</p>
  <p>Name of the Test</p>
  <h1>Chapter Name</h1>       
</div>
<div class="container">
<br>
<br>
    <div class="card">
    <div class="card-header" style="height: 65px; background-color: white;">
        <p style="padding: 15px; font-size: 18px;">Question 1 : Lorem Media is a full service media agency. We offer business innovationve solutions</p>
    </div>
    <div class="card-body" style="width: 100%;">
<ul class="list-group list-group-flush"> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
</ul> 
    </div>
    </div>
    <br>
    <div class="card">
    <div class="card-header" style="height: 65px; background-color: white;">
        <p style="padding: 15px; font-size: 18px;">Question 1 : Lorem Media is a full service media agency. We offer business innovationve solutions</p>
    </div>
    <div class="card-body" style="width: 100%;">
<ul class="list-group list-group-flush"> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
</ul> 
    </div>
    </div>
    <br>
    <div class="card">
    <div class="card-header" style="height: 65px; background-color: white;">
        <p style="padding: 15px; font-size: 18px;">Question 1 : Lorem Media is a full service media agency. We offer business innovationve solutions</p>
    </div>
    <div class="card-body" style="width: 100%;">
<ul class="list-group list-group-flush"> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
</ul> 
    </div>
    </div>
    <br>
    <div class="card">
    <div class="card-header" style="height: 65px; background-color: white;">
        <p style="padding: 15px; font-size: 18px;">Question 1 : Lorem Media is a full service media agency. We offer business innovationve solutions</p>
    </div>
    <div class="card-body" style="width: 100%;">
<ul class="list-group list-group-flush"> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
  <li class="list-group-item" style="color: grey;">Lorem Media is a full service media agency. We offer business innovationve solutions</li> 
</ul> 
    </div>
    </div>
    <br>
    <button type="button" class="btn btn-danger" style="position: absolute; left: 47%; margin-bottom: 5%;" onclick="location.href='/analysis'">Submit Quiz</button>
</div>

@endsection
</body>
</html>