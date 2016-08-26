@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row"> <br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Item</div>
                <div class="panel-body">
                    {!! Form::model($catalogacao, array('route' => ['catalogacao.update', $catalogacao->id], 'method' => 'put')) !!}

                        @include('includes._form_cadastro')

                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::submit('Salvar', array('class'=>'btn btn-primary')) !!}

                                <a href="/" class="btn btn-default">Cancelar</a>
                            </div>
                        </div>
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><br><br>
</div>
@endsection
<!----https://github.com/ruancarvalho/webdevacademy/blob/master/ux/bootstrap-crud/add.html
https://laravelcollective.com/docs/5.2/html