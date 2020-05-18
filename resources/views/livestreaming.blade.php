@extends('layouts.app')
<html>
<head>
<style>
.rounded-mb-0:hover{
    cursor:pointer;
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
                    <a class="nav-link" href="/home" style="color: white; font-size: 18px;">Lessons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/assignment" style="color: white; font-size: 18px;">Assignment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/livestreaming" style="color: yellow; font-size: 18px;">Live Streaming</a>
                </li>
                </ul>
            </div>
</nav>

<div class="container">
<br>
<p style="color: red; font-size: 18px;"><b>Ongoing</b></p>
<div class="card-deck">
    <div class="rounded-mb-0" onclick="window.location.href='/videolesson'">
      <div class="card-body card-body-1 text-center" id="card1">
        <p class="card-text" style="text-align: left;">TELUGU</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card4">
        <p class="card-text" style="text-align: left;">MATHEMATICS</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="container">
<p style="color: blue; font-size: 18px;"><b>Scheduled Live Lessons</b></p>
<div class="card-deck">
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card1">
        <p class="card-text" style="text-align: left;">TELUGU</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card4">
        <p class="card-text" style="text-align: left;">MATHEMATICS</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>
        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
</body>
</div>