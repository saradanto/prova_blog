<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="ui-input-container">
                <input
                wire:model.live="search"
                  required=""
                  placeholder="Type something..."
                  class="ui-input"
                  name ="search"
                  type="search"
                />
                <div class="ui-input-underline"></div>
                <div class="ui-input-highlight"></div>
                <div class="ui-input-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path
                      stroke-linejoin="round"
                      stroke-linecap="round"
                      stroke-width="2"
                      stroke="currentColor"
                      d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z"
                    ></path>
                  </svg>
                </div>
              </div>
        </div>
    </div>


    <!-- Articles section-->


    <section class="" id="services">
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
</div>

