<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $clsaaBaseMessage;
    public $defaultMessage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($clsaaBaseMessage, $defaultMessage="初期値です")
    {
        $this->clsaaBaseMessage = $clsaaBaseMessage;
        $this->defaultMessage = $defaultMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tests.test-class-base-component');
    }
}
