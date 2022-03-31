<form action="{{route('title.update', $page->id)}}" method="POST">
    @csrf
    <input type="text" value="{{$page->title}}" name="title">
    <button type="submit">Change</button>
</form>