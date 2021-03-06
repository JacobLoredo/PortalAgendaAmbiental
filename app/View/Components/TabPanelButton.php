<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TabPanelButton extends Component
{
    /**
     * Id del botón.
     *
     * @property string
     */
    public $id;

    /**
     * Nombre del botón.
     *
     * @property string
     */
    public $nombre;
    public $nombreRes;
    /**
     * Id del contenedor con el contenido que controla este
     * botón.
     *
     * @property string
     */
    public $idTabPanelContent;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $nombre, $idTabPanelContent,$nombreRes=null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->idTabPanelContent = $idTabPanelContent;
        $this->nombreRes=$nombreRes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tab-panel-button');
    }
}
