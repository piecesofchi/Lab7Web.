<?php
namespace App\Cells;

use App\Models\ArtikelModel;

// Kita hapus bagian "extends Cell" dan "use CodeIgniter\View\Cell;"
class ArtikelTerkini
{
    public function tampil()
    {
        $model = new ArtikelModel();
        // Mengambil 5 artikel paling baru berdasarkan tanggal (created_at)
        $artikel = $model->orderBy('created_at', 'DESC')->limit(5)->findAll();
        
        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}