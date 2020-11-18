<?php

namespace App\View\Components\auth;

use App\Models\Angkatan;
use App\Models\Jurusan;
use App\Models\Kelas;
use Illuminate\View\Component;

class InputSelect extends Component
{

    public $field;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field, $label)
    {
        $this->field = $field;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $angkatan = Angkatan::all();
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view('components.auth.input-select', compact('angkatan', 'jurusan', 'kelas'));
    }
}
