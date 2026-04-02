<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeader extends Component
{
    public $title;
    public $badge;

    public function __construct($title, $badge)
    {
        $this->title = $title;
        $this->badge = $badge;
    }

    public function render()
    {
        return view('components.section-header');
    }
}
