@if ($errors->any())
    <div class="alert alert-danger fixed-top top-messages">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif