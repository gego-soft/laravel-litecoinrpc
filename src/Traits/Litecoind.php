<?php

namespace Gegosoft\Litecoin\Traits;

trait Litecoind
{
    public function litecoind()
    {
        return app('litecoind');
    }
}
