@if ($errors->has('title'))
    <strong>{{ $errors->first('title') }}</strong>
@endif

@foreach ($todos as $todo)
    <p>
        {{ $todo->id . '.' . $todo->title }}
        <form action="{{ url("todo/$todo->id") }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
@endforeach
<form action="{{ url('todo') }}" method="POST">
    {{ csrf_field() }}
    <input type="text" placeholder="請輸入東西" name="title">
    <input type="submit">
</form>