
@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row"> <br><br><br>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Search Item</div>
                    <div class="panel-body">
                        <br/>
                        <div class="col-md-12" id="post-data">
                            @include('includes.data_search')
                        </div>
                    </div>
                    <div class="ajax-load text-center" style="display:none">
                        <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Carregando...</p>
                    </div>
                </div>
            </div>
        </div><br><br>
    </div>
@endsection