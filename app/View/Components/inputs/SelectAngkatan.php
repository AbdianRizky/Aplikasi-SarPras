<?php

namespace App\View\Components\inputs;

use App\Models\Angkatan;
use Illuminate\View\Component;

class SelectAngkatan extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $angkatan = Angkatan::all();

        return view('components.inputs.select-angkatan', compact('angkatan'));
    }
}
