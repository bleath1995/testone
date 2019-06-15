{{-- {{ $todos }} --}}

@foreach ($todos as $todo)
    <p>{{ $todo }}</p>
@endforeach

<form action="/todo" method="POST">
    {{ csrf_field() }}
    <input type="text" placeholder="請輸入東西" name="title">
    <input type="submit">
</form>