<x-layout title="Crea Tag">


        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="reg-log-form p-3 text-dark" method="POST" action="{{ route('tag.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tag Name</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea Tag</button>
                </form>
            </div>
        </div>


</x-layout>
