@extends('layouts.app')

@section('content')

    <div class="container background-grey bottom-border">
        <div class="row padding-vert-60">
            <div class="section">
                <div class="container" style="background-color:#7ADEDE">
                    <div class="row">
                        <div class="col-md-6">
                            <img src={{ asset('/img/download.jpg') }}  class="img-responsive img-thumbnail>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container background-grey bottom-border">
        <div class="row padding-vert-60">
            <div class="p-y-3 section">
                <div class="container">
                    <div class="row">
                      <div class="col-md-5">
                          <div class="form-group">
                              <label for="image" class="col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <img src="{{asset('img/'.$artigo->foto)}}" height="180" width="150" class="img-rounded">
                              </div>
                          </div>

                    </div>
                        <div class="col-md-7">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Especificações</a></li>
                                <li><a data-toggle="tab" href="#tab-2">oooooo</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade in active">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <th>Nome do artigo</th>
                                            <td>{{$artigo->designacao}}</td>
                                        </tr>
                                        <tr>
                                            <th>Categoria</th>
                                            <td>{{$artigo->categoria->designacao}}</td>
                                        </tr>
                                        <tr>
                                            <th>Data</th>
                                            <td>{{$artigo->data}}</td>
                                        </tr>
                                        <tr>
                                            <th>Local</th>
                                            <td>{{$artigo->local}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="{{route('achados.edit',$artigo->id)}}" class='btn  btn-success '> Achei </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container background-grey bottom-border">
        <div class="row padding-vert-60">
            <!-- Icons -->
            <div class="col-md-4 text-center">
                <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn">Velit esse molestie</h2>
                <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn">Quam nunc putamus</h2>
                <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
                <h2 class="padding-top-10 animate fadeIn">Placerat facer possim</h2>
                <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
            </div>
            <!-- End Icons -->
        </div>
    </div>
    </div>
@endsection
