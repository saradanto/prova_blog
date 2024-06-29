<x-main>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1>{{$article->title}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-5 d-flex justify-content-center align-items-center">
                    <div class="card border-0" style="width: 50rem;">
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
