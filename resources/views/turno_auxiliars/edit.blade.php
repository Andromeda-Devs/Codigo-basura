@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('turnoAuxiliars.index') !!}">@lang('models/turnoAuxiliars.singular')</a>
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
                              <strong>Editar @lang('models/turnoAuxiliars.singular')</strong>
                          </div>
                          <div class="card-body">

                              @include('turno_auxiliars.fields')

                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection