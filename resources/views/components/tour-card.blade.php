<div class="card col-12 col-md-3" style="width: 18rem;">
    <img src="{{ Storage::url($tour->img) }}" class="card-img-top" alt="{{$tour->name}} image">
    <div class="card-body">
        <h5 class="card-title">{{$tour->name}}</h5>
        <h6 class="card-title">{{$tour->country}}</h6>
        <div class="my-1">
            <span class="badge rounded-pill text-bg-primary mb-1">Tag</span>
        </div>
        <a href="{{route('tour.show', compact('tour'))}}" class="btn btn-warning">Vedi Tour</a>
    </div>
</div>
