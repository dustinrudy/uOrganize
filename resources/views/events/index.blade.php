
@extends('master')
<style>

.e-container {
    width: 245px;
    height: 170px;
    margin: 25px 30px;
    background-color: #00e7ff96;
    float: left;
    border-radius: 15px;
    transition: background-color 0.5s;
    cursor: pointer;
    text-decoration: none;
    color: #636b6f;
}

.e-container:hover {
   transition: background-color 0.5s;
   background-color: #FFF;
   color: #636b6f;
}

.e-title {
    padding: 20px;
}

.e-description {
    text-align: center;
    line-height: 23px;
    margin: 8px;
}

.e-add {

    border-radius: 100%;
    font-size: 50px;
    background-color: #00e7ff96;
    height: 60px;
    width: 62px;
    text-decoration: none;
    transition: background-color 0.5s;
}

.e-add:hover {

    transition: background-color 0.5s;
    background-color: #FFF;
    color: #00e7ff96;

}

.e-add:visited {
    text-decoration: none;
    color: #FFF;

}

a {
    text-decoration: none;
}

</style>
@section('title')
    Events
@endsection

@section('content')
    <div class="title">
    Events
    </div>

    <a class="e-add" href="events/create"><div class="e-add">+</div></a>

    @foreach($events as $event)
    <a href="events/{{ $event->id }}">
        <div class="e-container">

        <div class="e-title"> {{ $event->title }} </div>
        <p class="e-description"> {{ $event->description }} </p>

        </div>

    @endforeach


    @endsection
