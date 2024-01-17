<table class="my-3">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th class="px-5">Url</th>
        <th>Actions</th>
    </tr>
    @foreach($projects as $project)
    <tr>
        <td>
            <h5 class="w-75">{{$project->title}}</h5>
        </td>
        <td>
            <div class="w-75">{{$project->body}}</div>
        </td>
        <td>
            <div class="img-cont">
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{$project->title}}">
            </div>
        </td>
        <td class="px-5">
            <a href="{{$project->url}}">Link to project</a>
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}"><i
                    class="fa-solid fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.projects.edit', $project)}}"><i
                    class="fa-solid fa-pencil"></i></a>
            <form class="d-inline" action="{{route('admin.projects.destroy', $project)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>