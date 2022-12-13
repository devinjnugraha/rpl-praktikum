<x-template>
    <h2 class="fw-bold mb-5">Daftar Ruangan GKM</h2>

    <div class="text-center">
        <div class="row g-5">
            @foreach ($rooms as $room)
                <div class="col-md-4">
                    <x-card image="{{ $room->image }}" title="{{ $room->title }}"
                        href="{{ route('room.show', $room) }}" />
                </div>
            @endforeach
        </div>
    </div>

</x-template>
