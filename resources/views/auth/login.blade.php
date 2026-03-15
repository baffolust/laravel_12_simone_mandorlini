<x-layout title="Access to the community">

    <div class="container overlap-header">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form class="reg-log-form p-3 text-dark" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
