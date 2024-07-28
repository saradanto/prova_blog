<x-main>

    <section>
        <div class="container">
            <div class="row d-flex d-flex justify-content-center align-items-center">
                <div class="card w-75 mb-3 card border-0">
                    <div class="card-body">
                      <h1 class="card-title">{{$article->title}}</h1>
                      <p class="card-text mt-4">
                        Posted by: {{$article->user->name}} on {{$article->created_at->format('d/m/Y')}}
                      </p>
                      <p class="card-text mt-4">
                        @foreach ($article->categories as $category)
                            <span class="badge text-bg-secondary">{{$category->name}}</span>
                        @endforeach
                      </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex d-flex justify-content-center align-items-center">
                <div class="col-12 my-5 w-75 d-flex justify-content-center align-items-center">
                    <div class="card border-0">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="img article">
                        <div class="card-body my-5">
                          <p class="card-text">{{$article->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-main>
