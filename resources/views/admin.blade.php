<x-template>
    <h2 class="fw-bold mb-5">Permintaan Peminjaman</h2>
    {{-- Tab Headerss --}}
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                role="tab" aria-controls="nav-home" aria-selected="true">Upcoming
            </button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Past
            </button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Rejected
            </button>
        </div>
    </nav>

    {{-- Tab Contents --}}
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active py-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            {{-- TODO: Foreach peminjamen as $peminjaman do x-card-peminjaman --}}
            <x-card-peminjaman peminjaman={{ $peminjaman }} />
        </div>
        <div class="tab-pane fade py-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <x-card-peminjaman peminjaman={{ $peminjaman }} />
        </div>
        <div class="tab-pane fade py-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <x-card-peminjaman peminjaman={{ $peminjaman }} />
        </div>
    </div>
</x-template>
