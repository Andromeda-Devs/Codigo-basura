@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('requerimientos.index') !!}">@lang('models/requerimientos.singular')</a>
          </li>
          <li class="breadcrumb-item active">@lang('crud.edit')</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Editar @lang('models/requerimientos.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($requerimiento, ['route' => ['requerimientos.update', $requerimiento->id], 'method' => 'patch']) !!}

                              @include('requerimientos.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection