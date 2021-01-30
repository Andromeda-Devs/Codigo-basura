@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">@lang('models/regions.plural')</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             @lang('models/regions.plural')
                             <a class="pull-right btn btn-primary" role="button" href="{{ route('regions.create') }}"><i class="fa fa-plus"></i> Añadir</a>
                         </div>
                         <div class="card-body">
                             @include('regions.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection
