<x-layout title="{{ $tour->name }}">

    <div class="row justify-content-center">
        <div class="col-12 col-md-3 d-flex justify-content-center">
            <img class="tour-show-img" src="{{ Storage::url($tour->img) }}" alt="{{ $tour->name }} image">
        </div>
        <div class="col-12 col-md-6 my-3 tour-show-description">
            <h6 class="my-2">Country: {{ $tour->country }}</h6>
            <h4>Descrizione del viaggio </h4>
            <p>{{ $tour->description }}</p>
            <div class="my-1">
                <span class="badge rounded-pill text-bg-primary mb-1">Tag</span>
            </div>
            <div class="d-flex">
                <a class="mx-3" href="{{ route('tour.edit', compact('tour')) }}">Edit Tour</a>
                <form class="mx-3" action="{{ route('tour.destroy', compact('tour')) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="nav-link text-primary text-decoration-underline">Delete Tour</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
