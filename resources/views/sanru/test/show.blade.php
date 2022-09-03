@extends('layouts.app')

@section('title')
Mouvement
@endsection
@section('content')

<div class="container-fluid mt-2 " style="max-width: 80%;">
    <div class="">
    <table class="table  table-hover sm">
    <tr>
        <th class="text-center">Mouvement</th>
        <th class="text-center">Article</th>
    </tr>
    @foreach($ligneMouvements as $ligne)
    <tr>
        <td class="align-middle text-center">
            <a href="" class="btn btn-info" >
                {{ $ligne->mouvement()->get()->first()->nom }}
            </a>
        </td>
        <td class="align-middle text-center h5">
                {{  $ligne->article()->get()->first()->nom  }} / {{ $ligne->numero_serie }}
        </td>
    </tr>
    @endforeach
    </table>
    </div>
</div>
@endsection