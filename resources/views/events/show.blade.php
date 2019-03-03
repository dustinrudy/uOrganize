
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

.e-description {

    text-align: center;
    padding: 5px;
}

.t-container {
    border: 1px solid;
    border-color: #636b6f;
    width: fit-content;
    padding: 30px;
    margin: auto;

}

.e-edit {
    padding: 5px;
}

.task {
   width: 280px;
}

.is-complete {
    text-decoration: line-through;
}

.new-task {
    width: auto;
    margin-bottom: 20px;
}



</style>
@section('title')
    Events
@endsection

@section('content')
    <div class="title">
    {{ $event->title }}
    </div>
    <p class="e-description">{{ $event->description }}</p>
    <a class ="e-edit" href="/events/{{ $event->id }}/edit"><div>Edit</div></a>

    @if ($event->tasks->count())
    <div class="t-container">
        <div class="subtitle">Tasks</div>
        <br>
        @foreach($event->tasks as $task)
            <div class="task">
            <form method="POST" action="/tasks/{{ $task->id }}">
                @method('PATCH')
                @csrf
                <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                    {{ $task->description }}
               </label>

            </form>



            </div>
            <br>
        @endforeach

    @endif

    <form method="POST" action="/events/{{ $event->id }}/tasks">
        @csrf
        <div class="task">
            <input type="text" class="new-task" name="description" placeholder="New Task">
        </div>

    <button type="submit">Add Task</button>

    @include('errors')
    </form>

</div>







@endsection
