<table class="my-3">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td>
            <h5 class="">{{$category->name}}</h5>
        </td>
        <td>
            <a class="btn btn-primary" href="{{route('admin.categories.show', $category)}}"><i
                    class="fa-solid fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('admin.categories.edit', $category)}}"><i
                    class="fa-solid fa-pencil"></i></a>
            <form class="d-inline" action="{{route('admin.categories.destroy', $category)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
</table>