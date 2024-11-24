<?php

namespace namespace Bits\Themply;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ThemplyBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
