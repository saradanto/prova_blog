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

                                    <div class="d-flex">
                                        <a href="{{route('articles.edit', ['article'=> $article])}}" class="btn btn-outline-primary" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg>
                                            <span class="visually-hidden">Button</span>
                                        </a>
                                        <a href="{{route('articles.show', ['article'=> $article])}}" class="btn btn-outline-success" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                            </svg>
                                            <span class="visually-hidden">Button</span>
                                        </a>

                                        <form action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST" style="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Sei sicuro di voler eliminare questo articolo?');">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                                <span class="visually-hidden">Elimina</span>
                                            </button>
                                        </form>
                                    </div>

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
