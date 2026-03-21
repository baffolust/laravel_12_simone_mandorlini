<div class="card col-12 col-md-3" style="width: 18rem;">
    <img src="{{ Storage::url($tour->img) }}" class="card-img-top" alt="{{$tour->name}} image">
    <div class="card-body">
        <h5 class="card-title">{{$tour->name}}</h5>
        <h6 class="card-title">{{$tour->country}}</h6>
        <div class="my-1">
            <span class="badge rounded-pill text-bg-primary mb-1">Tag</span>
        </div>
        <a href="{{route('tour.show', compact('tour'))}}" class="btn btn-warning">Vedi Tour</a>
        <div class="d-flex py-2">
                <a class="mx-3" href="{{ route('tour.edit', compact('tour')) }}">Edit Tour</a>
                <form class="mx-3" action="{{ route('tour.destroy', compact('tour')) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="nav-link text-primary text-decoration-underline">Delete Tour</button>
                </form>
            </div>
    </div>
</div>
