<?php
namespace Bits\Themply\Contao;

use Contao\Backend as Backend;
use Contao\System;

class ThemplyModule extends Backend
{
    public function __construct()
    {
        parent::__construct();
        // Hier kannst du deine Logik hinzufügen
    }

    public function run()
    {
        // Logik für das Backend-Modul
        return 'hello world';
    }
}