<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Url</th>
            <th>Edit</th>
        </tr>
        @foreach($pages as $page)
        <tr>
            <td>{{$page->title}}</td>
            <td>{{$page->slug}}</td>
            <td><a href="{{route('title.edit', $page->id)}}">Edit</a></td>
        </tr>
        @endforeach
    </thead>

    @if(session()->has('success'))
        <p>{{session()->get('success')}}</p>
    @endif
</table>