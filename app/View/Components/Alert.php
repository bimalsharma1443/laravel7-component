<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{


    public $type;

    public $message;

    public $title;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type,$message)
    {
        $this->type = $type;
        $this->message = $message;
        $this->title = "this is a demo one";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }


    public function list($data) {
        return [
            'mumbai',
            'madars',
            'pune',
            $data
        ];
    }
}
