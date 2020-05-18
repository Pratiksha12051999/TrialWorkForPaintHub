<html>
<head>
<style>
.video-container{
  align-items: center;
  display: flex;
  justify-content: center;
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
                    <a class="nav-link" href="/assignment" style="color: white; font-size: 18px;">Assignment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/livestreaming" style="color: yellow; font-size: 18px;">Live Streaming</a>
                </li>
                </ul>
            </div>
</nav>
<br>
<br>
<h3 style="text-align: center;"> Video streamed from youtube </h3>
<div class="video-container">

<iframe width="560" height="315" src="https://www.youtube.com/embed/fKbdH2P1zsY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
<br><br>
<h3 style="text-align: center;"> Video uploaded manually</h3>
<div class="video-container">
<video width="400" controls>
    <source src="video.mp4" type="video/mp4">
</video>
</div>


@endsection
</body>
</html>