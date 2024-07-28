<x-main>


    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5">
                <h2>MODIFICA ARTICOLO</h2>
            </div>
        </div>
        <div class="row">
            <div class="d-flex col-12 justify-content-center align-items-center">
                <form style="width: 26rem;" action="{{route('articles.update', ['article' => $article])}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" id="title" class="form-control" name="title" />

                    </div>

                    <!-- Message input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="body">Testo</label>
                        <textarea class="form-control" id="body" rows="4" name="body"></textarea>

                    </div>

                    <!-- Checkbox -->
                    @foreach ($categories as $category)
                    <div class="form-check mb-4">
                        <input
                        class="form-check-input me-2"
                        type="checkbox"
                        value="{{$category->id}}"
                        id="category_id"
                        name="categories[]"
                        @if ($article->categories->contains($category->id))
                            checked
                        @endif
                        />
                        <label class="form-check-label" for="form4Example4">
                            {{$category->name}}
                        </label>
                    </div>
                    @endforeach


                    <div class="mb-3 my-5">
                        <label for="image" class="form-label">Inserisci un'immagine</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>


                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Invia</button>
                </form>
            </div>
        </div>
    </div>




</x-main>
