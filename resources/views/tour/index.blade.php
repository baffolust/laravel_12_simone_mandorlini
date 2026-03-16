<x-layout title="All Tours">

    <div class="row justify-content-evenly ">
        @foreach ($tours as $tour)
            <x-tour-card :tour="$tour" />
        @endforeach
    </div>

</x-layout>
