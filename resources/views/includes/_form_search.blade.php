
{!! Form::open(['url' => 'search#services', 'method'=> 'get']) !!}
    <div class="input-group col-md-4 col-md-offset-4">
        {!! Form::text('text', null, ['class' => 'form-control', 'placeholder' => 'Procurar por...']) !!}
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </span>
    </div>
{!! Form::close() !!}