<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    public $label;
    public $value;
    public $icon;
    public $valueColor;

    public function __construct($label, $value, $icon, $valueColor)
    {
        $this->label = $label;
        $this->value = $value;
        $this->icon = $icon;
        $this->valueColor = $valueColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.stat-card');
    }
}
