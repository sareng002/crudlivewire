<?php

namespace App\Http\Livewire\Pdk;

use App\Models\PdkModel;
// use Livewire\WithPagination;
use Livewire\Component;

class PdkLivewire extends Component

{
    public $PdkModels, $nik, $kk, $nama, $jenis_kelamin, $tempat_lahir, $tgl_lahir, $alamat, $pekerjaan, $agama, $AHSK, $id_pdk;
    public $search;
    // public $pag = 5;
    public function mount()
    {
        $this->pag = 5;
    }

    public function render()

    {
        return view('livewire.pdk.pdk-livewire', [
            // 'pdkmodels' => PdkModel::latest()->get()
            'pdkmodels' => $this->search === null ?
                PdkModel::orderby('id', 'DESC')->paginate($this->pag) :
                PdkModel::orderby('id', 'DESC')
                ->where('nama', 'like', '%' . $this->search . '%')
                ->orWhere('nik', 'like', '%' . $this->search . '%')
                ->orWhere('kk', 'like', '%' . $this->search . '%')
                ->paginate($this->pag)
        ]);
    }
}
