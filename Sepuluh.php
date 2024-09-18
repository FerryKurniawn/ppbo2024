<?php

namespace App\Admin;

class Pegawai {
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn(): bool {
        return true;
    }

    public function cekOut(): bool {
        return true;
    }

    public function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}

class Dosen extends Pegawai {
    public string $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan.";
    }
}

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function __construct($nip, $nama, $no_hp, $alamat, $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function cuti(): void {
        echo "Tenaga Kependidikan {$this->nama} sedang cuti.";
    }
}

// Contoh penggunaan class
$dosen = new Dosen(12345, 'Budi', 987654321, 'Jl. Pendidikan No. 1', '123456789');
$dosen->mengajar(); // Output: Budi sedang mengajar perkuliahan.

$tk = new TenagaKependidikan(67890, 'Siti', 123456789, 'Jl. Ilmu No. 2', 5000000);
$tk->cuti(); // Output: Tenaga Kependidikan Siti sedang cuti.