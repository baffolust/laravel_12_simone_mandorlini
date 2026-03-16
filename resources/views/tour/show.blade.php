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
        </div>
    </div>
</x-layout>
