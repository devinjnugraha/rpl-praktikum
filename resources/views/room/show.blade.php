<x-template>
    <div class="mb-5">
        <img src="{{ asset($room->image) }}" class="rounded w-100"
            style="object-fit: cover;
            object-position: center;
            height: 300px" />
    </div>
    <div class="row gx-5">
        <div class="col-md-8">
            <div class="mb-5">
                <h1 class="fw-bold">{{ $room->title }}</h1>
                <h6 class="text-secondary">GKM FILKOM UB</h6>
            </div>
            <div class="mb-5">
                <h3 class="fw-bold">Deskripsi</h3>
                <p>{{ $room->description }}</p>
            </div>
        </div>

        <div class="col-md-4">
            @auth
                <div class="card shadow-sm p-4">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Pilih Jadwal</h4>
                        <hr class="my-4">
                        <form action="{{ route('room.pinjam.create', $room) }}">
                            <div class="mb-4">
                                Tanggal:
                                <input type="date" id="date" name="date" required>
                            </div>
                            <button type="submit" class="btn btn-secondary w-100 rounded-pill">Pinjam Sekarang!</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="card shadow-sm p-4">
                    <div class="card-body">
                        <h4 class="card-title fw-bold">Pilih Jadwal</h4>
                        <hr class="my-4">
                        <p>Anda harus melakukan login terlebih dahulu agar dapat meminjam ruangan ini.</p>
                        <a href="{{ route('login.index') }}" class="btn btn-secondary w-100 rounded-pill">Login</a>
                    </div>
                </div>
            @endauth
        </div>
</x-template>
