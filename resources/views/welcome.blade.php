<x-main>


    <!-- Articles section-->
    <section class="bg-light" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    @foreach ($articles as $article)

                    <div class="card mx-3" style="width: 18rem;">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{Str::limit($article->body, 200, '...')}}</p>
                          <a href="{{route('articles.show', ['article' => $article])}}" class="btn btn-primary">Apri articolo</a>
                        </div>
                      </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section-->
    <section id="contact">
        <div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
                    <h2>Contact us</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
                </div>
            </div>
        </div>
    </section>


</x-main>
