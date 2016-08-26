<?php

namespace Projeto\Http\Controllers;

use Illuminate\Http\Request;

use Projeto\Http\Requests;
use Projeto\Http\Controllers\Controller;

use Projeto\Jobs\ChangeLocale;

class LangController extends Controller
{

    public function language(Request $request)
    {
        $changeLocale = new ChangeLocale($request->input('lang'));
        $this->dispatch($changeLocale);

        return redirect()->back();
    }
}

//http://mydnic.be/post/laravel-5-and-his-fcking-non-persistent-app-setlocale