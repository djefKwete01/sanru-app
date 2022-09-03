@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="dropdown">
                <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                    <i class="tim-icons icon-settings-gear-63"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#pablo">Add</a>
                    <a class="dropdown-item" href="#pablo">Search</a>
                </div>
            </div>
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Les entrepots</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        Nom
                                    </th>
                                    <th>
                                        Type d'entité administrative
                                    </th>
                                    <th>
                                        Entité administrative
                                    </th>
                                    <th class="text-center">
                                        Articles
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      Entrepot-1
                                    </td>
                                    <td>
                                      Province
                                    </td>
                                    <td>
                                      Bunia
                                    </td>
                                    <td class="text-center">
                                      34
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
