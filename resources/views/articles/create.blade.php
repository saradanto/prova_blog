<x-main>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-md-5 mt-md-4 pb-5">
                    <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="title">Titolo Articolo</label>
                            <input type="text" class="form-control" id="title" placeholder="Titolo Articolo" name="title">
                        </div>
                        <div class="form-group mt-3">
                            <label for="body">Inserisci testo</label>
                            <textarea class="form-control" id="body" rows="5" placeholder="Inserisci il testo qui" name="body"></textarea>
                        </div>

                        <div class="form-group my-4">
                            @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check1" name="categories[]" value="{{$category->id}}">
                                    <label class="form-check-label">{{$category->name}}</label>
                                </div>
                            @endforeach
                        </div>

                        <div class="mb-3 my-5">
                            <label for="image" class="form-label">Inserisci un'immagine</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-success mb-3">Invio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-main>
