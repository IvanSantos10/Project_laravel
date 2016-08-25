@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row"> <br><br><br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adicionar Item</div>
                <div class="panel-body">
                    {!! Form::open(array('url' => 'cadastro#services')) !!}
                        <div class="row">
                          <div class="form-group col-md-4">
                            {!! Form::label('exampleInputEmail10', 'Campo Dois') !!}
                            {!! Form::text('exampleInputEmail10', null, array('class' => 'form-control', 'placeholder' => 'Digite o valor')) !!}
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputEmail11">Campo Dois</label>
                            <input type="email" class="form-control" id="exampleInputEmail11" placeholder="Digite o valor">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Campo Três</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Campo Quatro</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Campo Cinco</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Campo Seis</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                          </div>
                          <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Campo Sete</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Campo Oito</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Campo Nove</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                          </div>
                        </div>
                        <hr />

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