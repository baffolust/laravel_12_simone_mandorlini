<x-layout title="Modifica Tour">


        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form class="reg-log-form p-3 text-dark" method="POST" action="{{ route('tour.update', compact('tour'))}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"></label>
                        <input name="name" type="text" class="form-control" id="name" value="{{$tour->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Tour Description</label>
                        <textarea name="description" type="text" class="form-control" id="description" rows="8">{{$tour->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Tour Country</label>
                        <input name="country" type="text" class="form-control" id="country" value="{{$tour->country}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine del Tour</label>
                        <img src="{{Storage::url($tour->img)}}" class="tour-show-img-edit" alt="Immagine di {{$tour->name}}">
                        <input name="img" class="form-control" type="file" id="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Tour</button>
                </form>
            </div>
        </div>


</x-layout>
