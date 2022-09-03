@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="col-md-12">
      <div class="card">
      <div class="card-header">
      <div class="tools float-right">
      <div class="dropdown">
      <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-toggle="dropdown">
      <i class="tim-icons icon-settings-gear-63"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <a class="dropdown-item text-danger" href="#">Remove Data</a>
      </div>
      </div>
      </div>
      <h4 class="card-title">Articles</h4>
      </div>
      <div class="card-body">
      <div class="table-responsive ps">
      <table class="table">
      <thead class="text-primary">
      <tr>
      <th class="text-center">
      #
      </th>
      <th>
      Nom
      </th>
      <th>
      Catégorie
      </th>
      <th class="text-center">
      
      </th>
      <th class="text-right">
      Salary
      </th>
      <th class="text-right">
      Actions
      </th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td class="text-center">
      <div class="photo">
      </div>
      </td>
      <td>
      Andrew Mike
      </td>
      <td>
      Develop
      </td>
      <td class="text-center">
      2013
      </td>
      <td class="text-right">
      € 99,225
      </td>
      <td class="text-right">
      <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon " data-original-title="Refresh" title="">
      <i class="tim-icons icon-trash-simple"></i>
      </button>
      <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm " data-original-title="Delete" title="" aria-describedby="tooltip653848">
      <i class="tim-icons icon-simple-remove"></i>
      </button>
      </td>
      </tr>
      </tbody>
      </table>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
      </div>
      </div>
      </div>
  </div>
</div>
@endsection
