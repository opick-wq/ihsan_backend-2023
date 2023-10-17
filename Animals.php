<?php
class Animal
{
    public function __construct($data)
    {
        $this->animals = $data;
    }

    public function index()
    {
        if (count($this->animals) === 0) {
            echo "Belom ada hewan yang dimasukkanj<br>";
        } else {
            foreach ($this->animals as $animal) {
                echo "- $animal <br>";
            }
        }
    }

    public function store($data)
    {
        $this->animals[] = $data;
    }

    public function update($index, $data)
    {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data;
        } else {
            echo "Indeks tidak valid. Tidak dapat mengupdate hewan.<br>";
        }
    }

    public function destroy($index)
    {
        if (isset($this->animals[$index])) {
            $deletedAnimal = $this->animals[$index];
            unset($this->animals[$index]);
            $this->animals = array_values($this->animals);
        } else {
            echo "Indeks tidak valid. Tidak dapat menghapus hewan.<br>";
        }
    }
}

$animal = new Animal(['Ayam', 'Ikan']);
echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru (burung) <br>";
$animal->store('Burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Delete - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";

?>