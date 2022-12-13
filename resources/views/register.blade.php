<x-template>

    <div class="card shadow-sm p-4">
        <div class="card-body">
            <h4 class="card-title fw-bold">Register</h4>
            <hr class="my-4">
            <form action="{{ route('register.register') }}" method="POST">
                @csrf
                <x-floating-input name="nim" label="NIM" />
                <x-floating-input name="nama" label="Nama" />
                <x-floating-input name="no_telp" label="Nomor Telepon" />
                <x-floating-input name="asal_lembaga" label="Asal Lembaga" />
                <x-floating-input type="password" name="password" label="Password" />
                <x-floating-input type="password" name="password_confirmation" label="Konfirmasi Password" />
                <button type="submit" class="btn btn-secondary">Register</button>
            </form>
        </div>
    </div>

</x-template>
