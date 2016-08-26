<?php

namespace Projeto\Http\Controllers;

use Illuminate\Http\Request;

use Projeto\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use Projeto\Http\Requests\CatalogacaoCreateRequest;
use Projeto\Http\Requests\CatalogacaoUpdateRequest;
use Projeto\Repositories\CatalogacaoRepository;
use Projeto\Validators\CatalogacaoValidator;


class CatalogacaoController extends Controller
{

    /**
     * @var CatalogacaoRepository
     */
    protected $repository;

    /**
     * @var CatalogacaoValidator
     */
    protected $validator;

    public function __construct(CatalogacaoRepository $repository, CatalogacaoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->middleware('auth', ['except'=>'list']);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $catalogacaos = $this->repository->scopeQuery(function($query){
            return $query->orderBy('id','desc');
        })->paginate(2);

        return view('pages/projects', compact('catalogacaos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/cadastro');
    }

    /**function(){ echo 'hello';}
     * Store a newly created resource in storage.
     *
     * @param  CatalogacaoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogacaoCreateRequest $request)
    {
        $request['user_id'] = Auth()->user()->id;

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $catalogacao = $this->repository->create($request->all());

            $response = [
                'message' => 'Catalogacao created.',
                'data'    => $catalogacao->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return $this->list();//redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catalogacao = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $catalogacao,
            ]);
        }

        return view('catalogacao.show', compact('catalogacao'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $catalogacao = $this->repository->find($id);

        return view('pages.edit', compact('catalogacao'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  CatalogacaoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(CatalogacaoUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $catalogacao = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Catalogacao updated.',
                'data'    => $catalogacao->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Catalogacao deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Catalogacao deleted.');
    }



}
