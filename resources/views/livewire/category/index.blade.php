<div>


    @if (session()->has('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <a href="{{route('categories.create')}}" class="btn btn-success mb-5">Crea Nuova Categoria</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        @foreach ($categories as $category)
            <tbody>
                <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{route('categories.edit', ['category' => $category])}}" class="btn btn-outline-warning">Edit</a>
                    <a href="" class="btn btn-outline-danger">Delete</a>
                </td>
                </tr>
            </tbody>

        @endforeach
    </table>
</div>
