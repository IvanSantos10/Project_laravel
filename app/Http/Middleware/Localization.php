<?php

namespace Projeto\Http\Middleware;

use Closure;

use Projeto\Jobs\SetLocale;
use Illuminate\Bus\Dispatcher as BusDispatcher;

class Localization
{

    protected $bus;

    protected $setLocale;

    public function __construct(BusDispatcher $bus,SetLocale $setLocale)
    {
        $this->bus = $bus;
        $this->setLocale = $setLocale;
    }

    public function handle($request, Closure $next)
    {
        $this->bus->dispatch($this->setLocale);
        return $next($request);
    }
}