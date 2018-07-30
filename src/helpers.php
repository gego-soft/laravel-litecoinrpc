<?php

if (! function_exists('litecoind')) {
    /**
     * Get bitcoind client instance.
     *
     * @return \Munish\Litecoin\Client
     */
    function qtumd()
    {
        return app('litecoind');
    }
}
