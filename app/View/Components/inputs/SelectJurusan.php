<?php

namespace App\View\Components\inputs;

use App\Models\Jurusan;
use Illuminate\View\Component;

class SelectJurusan extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $jurusan = Jurusan::all();
        return view('components.inputs.select-jurusan',compact('jurusan'));
    }
}
