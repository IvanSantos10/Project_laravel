<?php

namespace Projeto\Jobs;

use Projeto\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class setLocale extends Job implements SelfHandling
{

    protected $languages;

    public function __construct()
    {
        $this->languages = config('app.languages');
    }

    public function handle()
    {
        if(!session()->has('locale'))
        {
            session()->put('locale', \Request::getPreferredLanguage($this->languages));
        }

        app()->setLocale(session('locale'));
    }
}