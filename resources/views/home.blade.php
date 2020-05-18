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
<div class="container">
<br>
  <div class="card-deck">
    <a href="/english" class="custom-card">
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card5">
        <p class="card-text" style="text-align: left;">ENGLISH</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
    </a>
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card2">
        <p class="card-text" style="text-align: left;">HINDI</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card3">
        <p class="card-text" style="text-align: left;">SCIENCE</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card4">
        <p class="card-text" style="text-align: left;">BIOLOGY</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>  
  </div>
</div>

<div class="container">
<br>
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
      <div class="card-body card-body-1 text-center" id="card6">
        <p class="card-text" style="text-align: left;">MATHEMATICS</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card7">
        <p class="card-text" style="text-align: left;">SOCIAL</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>
    <div class="rounded-mb-0">
      <div class="card-body card-body-1 text-center" id="card8">
        <p class="card-text" style="text-align: left;">GENERAL</p>
        <small style="color:white"><p style="text-align: left;"> 12 Chapters | 10 Exams </p></small>        <div class="progress border">
           <div class="progress-bar bg-white" style="width:60%"></div>
        </div>
      </div>
    </div>  
  </div>
</div>




@endsection
