<?php

if (! function_exists('litecoind')) {
    /**
     * Get bitcoind client instance.
     *
     * @return \Munish\Litecoin\Client
     */
    function litecoind()
    {
        return app('litecoind');
    }
}
