<x-template>
    <div class="card shadow-sm p-4 mb-5">
        <div class="card-body">
            <h4 class="card-title fw-bold">Form Peminjaman</h4>
            <hr class="my-4">
            <form action="{{ route('room.pinjam.store', $room) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-floating-input label="Ruangan" value="{{ $room->title }}" readonly=true />
                <x-floating-input name="date" label="Tanggal Peminjaman" value="{{ date('d F Y', strtotime($date)) }}"
                    readonly=true />
                <x-floating-input name="proker" label="Proker" />
                <x-floating-input name="agenda" label="Agenda" />

                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Berkas Peminjaman (.zip)</label>
                    <input class="form-control" name="berkas" type="file" id="formFile" accept=".zip">
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
</x-template>
