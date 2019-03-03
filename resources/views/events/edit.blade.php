
@extends('master')
<style>

.input-container {
    margin: 10px;
    padding: 10px;
}

input {
    font-family: Arial;
    font-weight: 200;
    font-size: 18px;
    height: 10px;
    width: 320px;
    text-align: center;
    padding: 20px;
}

textarea {
    font-family: Arial;
    font-weight: 200;
    font-size: 12px;
    height: 150px;
    width: 325px;
    text-align: left;
}

button {
    background-color: #00e7ff;
    border-radius: 5px;
    color: #636b6f;
    width: 120px;
    height: 40px;
    border: none;
    font-size: 17px;
    font-family: 'Expletus Sans', cursive;
    padding: 10px;
    cursor: pointer;
}

.delete {
    background-color: #ff0000;
    color: #ffffff;
}


</style>
@section('title')
    Edit Event
@endsection

@section('content')
    <div class="title">
    Edit Event
    </div>

    <form method="POST" action="/events/{{ $event->id }}">

       @method('PATCH')

        @csrf
        <div class="input-container">
            <input type="text" name="title" placeholder="Event Title" value="{{ $event->title }}" required>
        </div>

        <div class="input-container">
        <textarea name="description" placeholder="Event description" required>{{ $event->description }}</textarea>
        </div>

        <div class="input-container">
            <button type="submit">Update</button>
        </div>

    </form>

    <form method="POST" action="/events/{{ $event->id }}">
    @method('DELETE')

    @csrf

        <div class="input-container">
            <button class="delete" type="submit">Delete</button>
        </div>

    </form>



    @endsection
