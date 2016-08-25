@extends('layouts.default')
@section('content')
    @foreach($catalogacaos as $k => $val)
        <div class="content-section-{{ $k % 2 ? 'a' : 'b'}}">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 {{ $k % 2 ? '' : 'col-lg-offset-1 col-sm-push-6'}}">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">{{ $val['id'] }} - {{ $val['nome_especie'] }} </h2>
                        <p class="lead">A special thanks to <a target="_blank"
                                                               href="http://join.deathtothestockphoto.com/">Death to the
                                Stock Photo</a> for providing the photographs that you see in this template. Visit their
                            website to become a member.</p>
                    </div>
                    <div class="col-lg-5 {{ $k % 2 ? 'col-lg-offset-2' : 'col-sm-pull-6'}} col-sm-6">
                        <img class="img-responsive" src="img/ipad.png" alt="">
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
    @endforeach
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">
            <div class="text-center">
                {{ $catalogacaos->fragment('services')->render() }}
            </div>
        </div>
        <!-- /.container -->

    </div>
@stop