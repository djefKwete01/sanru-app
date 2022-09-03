@extends('layouts.app')

@section('title')
Mouvement
@endsection
@section('content')

<div class="container-fluid mt-2 " style="max-width: 80%;">
    <h3 class="text-center">Tableau de bord du Gerant {{ $user->name }}</h3>

    <div class="row justify-content-center">
        <a href="{{ route('article.dashboard') }}" class="btn btn-success mb-2">Articles</a>
        <a href="{{ route('mouvement.index') }}" class="btn btn-info">Mouvements</a>
    </div>

    <div class="row">
    <div class="table-primary"><h3 class="h3 text-left">Transferts</h3></div>    
    <table class="table  table-hover sm">
    <tr>
        <th class="text-center">Nom du mouvement</th>
        <th class="text-center">Beneficiaire</th>
        <th class="text-center">status</th>
        <th class="text-center">date</th>
    </tr>
    @forelse($transferts as $transfert)
    <tr>
        <td class="align-middle text-center h5">
            <a href="{{ route('dash.consulte.mouvement.show',$transfert) }}"  class="btn btn-outline-primary">
                {{  $transfert->nom  }}
            </a>       
        </td>
        <td class="align-middle text-center">
            <a href="" class="btn btn-info" >
                    {{  $transfert->beneficiaire()->get()->first()->nom  }}
            </a>
        </td>
        <td class="align-middle text-center"><a href="" class="btn btn-primary">{{ $transfert->status }}</a></td>
        
        <td class="align-middle text-center">
            {{ $transfert->date }}
        </td>
    </tr>
    @empty

    @endforelse
    </table>
    {{ $transferts->links() }}
    </div>


    <div class="row">
        <div class="table-primary"><h3 class="h3 text-left">Receptions</h3></div>    
        <table class="table  table-hover sm">
        <tr>
            <th class="text-center">Nom du mouvement</th>
            <th class="text-center">Expediteur</th>
            <th class="text-center">status</th>
            <th class="text-center">date</th>
            <th class="text-center" colspan="1">Options</th>
        </tr>
        @forelse($receptions as $reception)
        <tr>
            <td class="align-middle text-center h5">
                <a href="{{ route('dash.consulte.mouvement.show',$reception) }}"  class="btn btn-outline-primary">
                    {{  $reception->nom  }}
                </a>       
            </td>
            <td class="align-middle text-center">
                <a href="" class="btn btn-info" >
                        {{  $reception->expediteur()->get()->first()->nom  }}
                </a>
            </td>
            <td class="align-middle text-center"><a href="" class="btn btn-primary">{{ $reception->status }}</a></td>
            
            <td class="align-middle text-center">
                {{ $reception->date }}
            </td>
            <td class="align-middle text-center">
                <a href="{{-- route('mouvement.edit',$mouvement) --}}" class="btn btn-sm btn-primary">Modifier</a>
            </td>
        </tr>
        </table>
        {{ $receptions->links() }}
        @empty
            
        @endforelse
        
        </div>

    
</div>
@endsection