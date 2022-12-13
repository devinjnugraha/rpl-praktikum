<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Ruang Terbuka Lt. 1',
                'description' => 'Ruang Terbuka Lt. 1 adalah ruangan terbuka yang berada di lantai 1 Gedung Kreativitas Mahasiswa. Ruangan ini sering digunakan sebagai tempat mahasiswa mengerjakan hal-hal yang berkaitan dengan kegiatan perkuliahan.',
                'image' => 'gkm/gkm1.jpg',
            ],
            [
                'title' => 'Ruang GKM Lt. 3.1',
                'description' => 'Ruang GKM 3.1 adalah ruangan yang berada di lantai 4 Gedung Kreativitas Mahasiswa. Ruangan ini memiliki kapasitas hingga 80 orang. Ruangan ini sering digunakan untuk kegiatan mulai dari studi banding lembaga kemahasiswaan FILKOM hingga bootcamp yang diadakan oleh komunitas-komunitas FILKOM.',
                'image' => 'gkm/gkm3.1.jpg',
            ],
            [
                'title' => 'Ruang Terbuka Lt. 3',
                'description' => 'Ruang Terbuka Lt. 3 adalah ruangan terbuka yang berada di lantai 3 Gedung Kreativitas Mahasiswa. Ruangan ini sering digunakan sebagai tempat mahasiswa mengerjakan hal-hal yang berkaitan dengan kegiatan perkuliahan.',
                'image' => 'gkm/gkm3.jpg',
            ],
            [
                'title' => 'Ruang GKM Lt. 4.1 (Kanan)',
                'description' => 'Ruang GKM 4.1 adalah ruangan yang berada di lantai 4 Gedung Kreativitas Mahasiswa. Ruangan ini memiliki kapasitas hingga 80 orang. Ruangan ini sering digunakan untuk kegiatan mulai dari studi banding lembaga kemahasiswaan FILKOM hingga bootcamp yang diadakan oleh komunitas-komunitas FILKOM.',
                'image' => 'gkm/gkm4.1.jpg',
            ],
            [
                'title' => 'Ruang GKM Lt. 4.2 (Kiri)',
                'description' => 'Ruang GKM 4.2 adalah ruangan yang berada di lantai 4 Gedung Kreativitas Mahasiswa. Ruangan ini memiliki kapasitas hingga 80 orang. Ruangan ini sering digunakan untuk kegiatan mulai dari studi banding lembaga kemahasiswaan FILKOM hingga bootcamp yang diadakan oleh komunitas-komunitas FILKOM.',
                'image' => 'gkm/gkm4.2.jpg',
            ],
        ];
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['slug'] = Str::slug($data[$i]['title']);
        }

        Room::insert($data);
    }
}
