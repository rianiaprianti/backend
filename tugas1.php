<?php

class Animal {
    // Property animals (array)
    public $animals = [];

    // Constructor untuk mengisi data awal animals
    public function __construct($data = []) {
        $this->animals = $data;
    }

    // Method index untuk menampilkan seluruh data animals menggunakan foreach
    public function index() {
        foreach ($this->animals as $index => $animal) {
            echo $index . '. ' . $animal . PHP_EOL;
        }
    }

    // Method store untuk menambahkan hewan baru menggunakan array_push
    public function store($data) {
        array_push($this->animals, $data);
        echo $data . " telah ditambahkan." . PHP_EOL;
    }

    // Method update untuk memperbarui data hewan
    public function update($index, $data) {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data;
            echo "Data hewan pada index " . $index . " telah diperbarui menjadi " . $data . "." . PHP_EOL;
        } else {
            echo "Data hewan tidak ditemukan pada index " . $index . "." . PHP_EOL;
        }
    }

    // Method destroy untuk menghapus data hewan menggunakan unset
    public function destroy($index) {
        if (isset($this->animals[$index])) {
            $deletedAnimal = $this->animals[$index];
            unset($this->animals[$index]);
            echo $deletedAnimal . " telah dihapus." . PHP_EOL;
        } else {
            echo "Data hewan tidak ditemukan pada index " . $index . "." . PHP_EOL;
        }
    }
}

// Contoh penggunaan
$animal = new Animal(['Ayam', 'Ikan']);
echo 'Index - Menampilkan seluruh hewan <br>';
$animal->index();
echo '<br>';

echo 'Store - Menambahkan hewan baru (burung) <br>';
$animal->store('Burung');
$animal->index();
echo '<br>';

echo 'Update - Mengupdate hewan <br>';
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo '<br>';

echo 'Destroy - Menghapus hewan <br>';
$animal->destroy(1);
$animal->index();
echo '<br>';
