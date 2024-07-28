<div>
    <section>


        <div class="mb-md-5 mt-md-4 pb-5">
            <form class="containter mt-5" wire:submit.prevent="update">

                <div class="form-group">
                    <label for="name">Nome Categoria</label>
                    <input type="text" class="form-control" id="name" placeholder="Nome Categoria" wire:model="name">
                    <div>@error('name') {{ $message }} @enderror</div>
                </div>


                <div class="col-auto mt-5">
                    <button type="submit" class="btn btn-success mb-3" onclick="confirm('Sei sicuro di voler aggiornare questa categoria?') || event.stopImmediatePropagation()">Aggiorna</button>
                </div>



            </form>
        </div>
    </section>
</div>
