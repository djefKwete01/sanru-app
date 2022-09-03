@extends('layouts.app')

@section('title')
Mouvement
@endsection
@section('content')

<div class="container-fluid mt-2 " style="max-width: 80%;">
    <div class="">
    <a href="{{ route('mouvement.create') }} " class="btn btn-success mb-2">Enregistrer</a>
    <table class="table  table-hover sm">
    <tr>
        <th class="text-center">Nom du mouvement</th>
        <th class="text-center">Type mouvement</th>
        <th class="text-center">expediteur</th>
        <th class="text-center">beneficiaire</th>
        <th class="text-center">status</th>
        <th class="text-center">date</th>
        <th class="text-center" colspan="2">Options</th>
    </tr>
    @foreach($mouvements as $mouvement)
    <tr>
        <td class="align-middle text-center h5">
            <a href="{{-- route('mouvement.show',$mouvement) --}}"  class="btn btn-outline-primary">
                {{  $mouvement->nom  }}
            </a>       
        </td>
        <td class="align-middle text-center h5">
            <a href=""  class="btn btn-primary">
            {{  $mouvement->typeMouvement()->get()->first()->nom }}
            </a>       
        </td>
        <td class="align-middle text-center">
            <a href="" class="btn btn-info" >
                    {{  $mouvement->expediteur()->get()->first()->nom  }}
            </a></td>
        <td class="align-middle text-center">
            <a href="" class="btn btn-info">
                    {{  $mouvement->beneficiaire()->get()->first()->nom  }}
            </a></td>
        </td>
        <td class="align-middle text-center"><a href="" class="btn btn-primary">{{ $mouvement->status }}</a></td>
        
        <td class="align-middle text-center">
            {{ $mouvement->date }}
        </td>
        <td class="align-middle text-center">
            <a href="{{ route('mouvement.edit',$mouvement) }}" class="btn btn-sm btn-primary">Modifier</a>
        </td>
        <td  class="align-middle text-center">
            <form action="{{ route('mouvement.destroy',$mouvement) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" type="submit" onsubmit="">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>
    {{ $mouvements->links() }}
    </div>
</div>
@endsection