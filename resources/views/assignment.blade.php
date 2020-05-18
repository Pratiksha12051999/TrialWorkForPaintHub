<html>
<head>
<style>
.col1{
    width: 150px;
    height: 300px;
    background-color: red;
    margin-left: 28%;
    margin-right: 20px;
    margin-top: 20px;
    border-radius: 5%;
    margin-bottom: 20px;
    background-image: linear-gradient(to right, #FF6D10 , #ffd2b7);
}
.col2{
    width: 150px;
    height: 280px;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
    border-radius: 5%;
    background-image: linear-gradient(to right, #47AA5B , #83f725);
}
.col3{
    width: 150px;
    border-radius: 5%;
    height: 200px;
    background-color: green;
    margin-left: 28%;
    margin-right: 20px;
    margin-top: 20px;
    margin-bottom: 20px;
    background-image: linear-gradient(to right, #47AA5B , #83f725);
}

.col4{
    width: 150px;
    height: 220px;
    border-radius: 5%;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
    background-image: linear-gradient(to right, #2881DD , #add6ff);
}
.row{
    width: 80%;
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
<br>
<br>
<div class="container-fluid">
  <div class="row">
  
    <div class="col-6 col-sm-4 text-center col1">
    <br>
    <br>
    <a href="/allassignment" class="custom-card">
      <p class="card-text" style="text-align: left;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 25px;color: white;"><b>ENGLISH</b></p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border" style="width: 80%;">
            <div class="progress-bar bg-white" style="width:31%"></div>
        </div>
        <br>
        <p style="text-align: left;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 15px;color: white;">TIME TO WORK!</p>
        <p style="text-align: centre;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 40px;color: white;">  03    22    12</p>
        </div>
    </a>
    <div class="col-6 col-sm-4 text-center col2">
      <br>
      <br>
      <p class="card-text" style="text-align: left;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 25px;color: white;"><b>MATHEMATICS</b></p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border" style="width: 80%;">
            <div class="progress-bar bg-white" style="width:81%"></div>
        </div>
        <br>
        <p style="text-align: left;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 15px;color: white;">TIME TO WORK!</p>
        <p style="text-align: centre;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 40px;color: white;">  01    33    14</p>
    </div>
    <div class="col-6 col-sm-4 text-center col3">
    <br>
    <br>
      <p class="card-text" style="text-align: left;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 25px;color: white;"><b>BIOLOGY</b></p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border" style="width: 80%;">
            <div class="progress-bar bg-white" style="width:10%"></div>
        </div>
        <br></div>
    <div class="col-6 col-sm-4 text-center col4">
    <br>
    <br>
      <p class="card-text" style="text-align: left;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 25px;color: white;"><b>SCIENCE</b></p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border" style="width: 80%;">
            <div class="progress-bar bg-white" style="width:56%"></div>
        </div>
        <br>
        <p style="text-align: left;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 15px;color: white;">TIME TO WORK!</p>
        <p style="text-align: centre;font-family:Gill Sans,Gill Sans MT,Calibri;font-size: 40px;color: white;">  03    22    12</p>
    </div>
  </div>
</div>

@endsection
</body>
</html>