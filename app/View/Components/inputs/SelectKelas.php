<?php

namespace App\View\Components\inputs;

use App\Models\Kelas;
use Illuminate\View\Component;

class SelectKelas extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $kelas = Kelas::all();

        return view('components.inputs.select-kelas', compact('kelas'));
    }
}
