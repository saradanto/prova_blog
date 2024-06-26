<x-main>

    <div class="container my-5">
        <div class="row d-flex justify-content-center align-items-center">
            <h1>INSERISCI I TUOI DATI</h1>
            <form action="{{route('send')}}" method="POST" class="container mt-5" id="form1">
                @csrf
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">NOME E COGNOME</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Inserisci nome e cognome">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">INDIRIZZO EMAIL</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success mb-3">Invio</button>
                </div>
            </form>
        </div>
    </div>



</x-main>
