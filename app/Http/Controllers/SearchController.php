<?php

namespace Projeto\Http\Controllers;

use Projeto\Http\Requests;
use Illuminate\Http\Request;
use \Input as Input;
use Projeto\Repositories\CatalogacaoRepository;


class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(CatalogacaoRepository $repository, Request $request)
    {
        $Catalogacaos = $repository->paginate(5);
        if ($request->ajax()) {
            $view = view('includes.data_search',compact('Catalogacaos'))->render();

            return response()->json(['html'=>$view]);
        }

        return view('pages.search',compact('Catalogacaos'));

    }
}
