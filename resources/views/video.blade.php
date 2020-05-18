<html>
<head>
<style>
.video-container{
  margin-left: 13%;
  display: inline-block;
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
<br>
<br>

<div class="video-container">
    <iframe width="600" height="400" src="https://www.youtube.com/embed/fKbdH2P1zsY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div style="float: right; padding-left: 20px; font-size: 18px; font-family: Gill Sans,Gill Sans MT,Calibri;">
        <p style="font-size: 20px; color: red;"> Chapter Name </p>
        <p>Name of the sub topic will be shown here with time</p>
    </div>
</div>
<button type="button" class="btn btn-primary" style="margin-bottom: 4%;">Next</button>
<br>
<br>
<div class="container">
<p style="color: red; font-size: 18px;"><b>Progress Bar</b></p>
<div class="card-deck" style="margin-bottom: 5%;">
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
        <a href="/questions" class="custom-card">
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
</div>
</div>


@endsection
</body>
</html>