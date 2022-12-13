<x-template>
    <div class="card shadow-sm p-4">
        <div class="card-body">
            <h4 class="card-title fw-bold">Login</h4>
            <hr class="my-4">
            <form action="{{ route('login.authenticate') }}" method="POST">
                @csrf
                <x-floating-input name="nim" label="NIM" />
                <x-floating-input type="password" name="password" label="Password" />
                <button type="submit" class="btn btn-secondary">Login</button>
            </form>
        </div>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            {{ $errors->first() }}
        </div>
    @endif
</x-template>
