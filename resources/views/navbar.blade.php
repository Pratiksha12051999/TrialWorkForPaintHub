@extends('home')

@section('navbar')
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
                    <a class="nav-link disabled" href="/livestreaming" style="color: white; font-size: 18px;">Live Streaming</a>
                </li>
                </ul>
            </div>
</nav>
@endsection