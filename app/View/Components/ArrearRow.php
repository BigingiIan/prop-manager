<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArrearRow extends Component
{
    public $initials;
    public $name;
    public $unit;
    public $amount;
    public $overdueDays;

    public function __construct($initials, $name, $unit, $overdueDays, $amount)
    {
        $this->initials = $initials;
        $this->name = $name;
        $this->unit = $unit;
        $this->overdueDays = $overdueDays;
        $this->amount = $amount;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.arrear-row');
    }
}
