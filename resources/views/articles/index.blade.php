<x-main>

    <section>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-4 my-4">
                    <a href="{{route('articles.create')}}" class="btn btn-outline-success" role="button">Crea Nuovo Articolo</a>

                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        @foreach ($articles as $article)
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img
                                        src="{{Storage::url($article->image)}}"
                                        alt="img"
                                        style="width: 45px; height: 45px"/>
                                    </div>

                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{$article->title}}</p>

                                </td>
                                <td>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded"><a href="{{route('articles.edit', ['article'=> $article])}}"> Edit</a></button>
                                    <button type="button" class="btn btn-link btn-sm btn-rounded"><a href="{{route('articles.show', ['article'=> $article])}}" > Show</a>
                                    </button>
                                    <form action="{{route('articles.destroy', ['article' => $article])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                            Delete
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>

    </section>


</x-main>
