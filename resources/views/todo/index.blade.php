<form action="/todo" method="post">
    {{ csrf_field() }}
    <input type="text" placeholder="請輸入東西">
    <input type="submit">
</form>