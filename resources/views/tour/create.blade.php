<x-layout title="Crea il tuo Tour">


    <div class="row justify-content-center">
        <div class="col-12 col-md-8">

            <form class="reg-log-form p-3 text-dark" method="POST" action="{{ route('tour.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Tour Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Tour Description</label>
                    <textarea name="description" type="text" class="form-control" id="description" rows="8"></textarea>
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Tour Country</label>
                    <input name="country" type="text" class="form-control" id="country">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Immagine del tour</label>
                    <input name="img" class="form-control" type="file" id="img">
                </div>

                <div class="row">
                    @foreach ($tags as $tag)
                        <div class="col-6 col-md-3">
                            <x-tag-checkbox :tag="$tag" />
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary mt-4">Crea Tour</button>
            </form>
        </div>
    </div>


</x-layout>
