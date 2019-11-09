@extends('layout')
@section('title', 'Welcome page')

@section('navbar')
@parent

<body style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQOBlXUg3vnC38PPQBM4B-YnGf7EFZaT8M44uOPYkgUqoamGnaQ');height:100%;background-repeat:no-repeat;background-size:cover"> 
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style="background-image:url('https://www.designyourway.net/blog/wp-content/uploads/2016/07/Motivational-wallpaper-quotes-14.jpg');height:450px;background-repeat:no-repeat;background-size:cover">
</div>
</div>
</div>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<h4>`````````````Rabbya Imtiaz`````````````` </h4>
<h4>`````````````FA17-BSE-063``````````````` </h4> 
<h4>`````````````SE-5B``````````````````````</h4>        
</div>        
</div>        
</div>
<br>

@endsection

@section('content')
<div class="container" style="border: 1px solid;">
<div class="row">
<div class="col-md-3">
<h2>Quote </h2>
<p align="center">
“Believe in yourself! Have faith in your abilities! 
Without a humble but reasonable confidence in your 
own powers you cannot be successful or happy.”
</p>
</div>

<div class="col-md-3" style="border: 1px solid;">
        <h2>Quote </h2>
<p align="center">
“Press forward. Do not stop, do not linger in your journey,
but strive for the mark set before you.”
</p>
</div>
<div class="col-md-3" style="border: 1px solid;">
        <h2>Quote </h2>
<p align="center">
“There will be obstacles. There will be doubters. 
There will be mistakes. But with hard work, there are no limits.”
</p>
</div>
<div class="col-md-3" style="border: 1px solid;">
        <h2>Quote </h2>
<p align="center">
“One way to keep momentum going is to have constantly greater goals.”
</p>
</div>
</div>
</div>
<br>
<div class="container-fluid">
<div class="row" style="border:2px solid black">
<div class="col-md-12">
    <h1 align="center"> Life quote </h1>
    <p align="center"> “Change your life today. Don’t gamble on the future, act now, without delay.” </p>
</div>
</div>
</div>
<br>
        <div class="container">
        <div class="row">
        <div class="col-md-3" style="border: 3px solid black; background-color:#FF2D00">
        <h2>Quote </h2>
        <p align="center">
        “When you reach the end of your rope, tie a knot in it and hang on.”
        </p>
        </div>
        
        <div class="col-md-3" style="border: 3px solid black; background-color:yellow">
                <h2>Quote </h2>
        <p align="center">
        “Keep your face always toward the sunshine and shadows will fall behind you.”
        </p>
        </div>
        <div class="col-md-3" style="border: 3px solid black; background-color:pink">
                <h2>Quote </h2>
        <p align="center">
        “Honesty is the first chapter in the book of wisdom.”
        </p>
        </div>
        <div class="col-md-3" style="border: 3px solid black; background-color:#00FFF0">
                <h2>Quote </h2>
        <p align="center">
        “The journey of a thousand miles begins with one step.”
        </p>
        </div>
        </div>
        </div>
        <br>
        <br>
        <div class="container">
 <div class="row">
<div class="col-md-12" align="center">
                <button type="button" class="btn">Basic</button>
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-link">Link</button>
</div>
 </div>
</div>
<br>
@endsection 