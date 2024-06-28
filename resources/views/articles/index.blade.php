<x-main>

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
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Show
                    </button>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
        @endforeach

    </table>

</x-main>
