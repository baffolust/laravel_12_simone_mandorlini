@if (session('message'))
    <div class="alert alert-success top-messages">
        {{ session('message') }}
    </div>
@endif