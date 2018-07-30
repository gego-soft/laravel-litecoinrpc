<?php

namespace Gegosoft\Litecoin\Traits;

trait Litecoind
{
    public function qtumd()
    {
        return app('litecoind');
    }
}
