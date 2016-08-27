@foreach($Catalogacaos as $Catalogacao)
    <div>
        <h3><a href="">{{ $Catalogacao->nome_especie }}</a></h3>
        <p>{{ str_limit($Catalogacao->Infor_etnofarmacologica, 400) }}</p>

        <div class="text-right">
            <button class="btn btn-success">Read More</button>
        </div>

        <hr style="margin-top:5px;">
    </div>
@endforeach