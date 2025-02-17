<x-layout>
    <div class="">
        <div class="container-fluid">
            <div class="row justify-content-center my-5">
                <div class="col-12 col-md-6 form-create">
                    <form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                       
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Titolo" name='title'>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Sottotitolo" name='subtitle'>
                            </div>

                            <div class="mb-3 my-3">
                                <input class="form-control" type="file" id="formFile"
                                    placeholder="Foto di copertina" name='image'>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Seleziona categoria: </label>
                                <select class="form-select" name='category' aria-label="Default select example">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Descrizione dell'articolo" id="floatingTextarea2" cols="30"
                                    rows="6" name="body">{{ old('body') }}</textarea>
                            </div>
                       
                        <div class="custom-btn">
                            <button type="submit" class= "button btn1 my-3">Inserisci Articolo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
