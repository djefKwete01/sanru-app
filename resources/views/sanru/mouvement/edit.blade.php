@extends('layouts.app')

@section('title')
Mouvement
@endsection

@section('content')

<div class="container mt-2 col-6">
@error('id')
    <div class="alert alert-danger mb-1 mt-1">{{ $errors->first('id') }}</div>
@enderror
<form method="POST" action="{{ route('mouvement.update', $mouvement) }}">
    @csrf
    @method('PUT')
    <input type="hidden" value="{{ $mouvement->id }}" required name="id">
    <div class="mb-3 form-control-sm">
        <label for="article">Type Mouvement</label>
        <select name="typeMouvement" id="typeMouvement" class="form-control form-control-sm">
            
            <option value="{{  $mouvement->typeMouvement()->get()->first()->id }}" class="text-center align-baseline">
                {{  $mouvement->typeMouvement()->get()->first()->nom }}
            </option>
            @foreach($typeMouvements as $typeMouvement)
                <option value="{{  $typeMouvement->id }}" class="text-center align-baseline">{{  $typeMouvement->nom  }}</option>
            @endforeach

        </select>
        @error('typeMouvement')
            <div class="alert alert-danger mb-1 mt-1">{{ $errors->first('typeMouvement') }}</div>
        @enderror
    </div>
    <div class="mb-3 form-control-sm">
        <label for="article">Expediteur</label>
        <select name="expediteur" id="expediteur" class="form-control form-control-sm">

                <option value="{{  $mouvement->expediteur()->get()->first()->id }}" class="text-center align-baseline">
                    {{  $mouvement->expediteur()->get()->first()->nom  }}
                </option>
    
                @foreach($entrepots as $entrepot)
                    <option value="{{  $entrepot->id }}" class="text-center align-baseline">{{  $entrepot->nom  }}</option>
                @endforeach
    
        </select>
        @error('expediteur')
            <div class="alert alert-danger mb-1 mt-1">{{ $errors->first('expediteur') }}</div>
        @enderror
    </div>
    <div class="mb-3 form-control-sm">
        <label for="article">Beneficiaire</label>
        <select name="beneficiaire" id="beneficiaire" class="form-control form-control-sm">
            
            <option value="{{  $entrepot->id }}" class="text-center align-baseline">
                {{  $mouvement->beneficiaire()->get()->first()->nom  }}
            </option>

        @foreach($entrepots as $entrepot)
            <option value="{{  $entrepot->id }}" class="text-center align-baseline">{{  $entrepot->nom  }}</option>
        @endforeach

        </select>
        @error('beneficiaire')
            <div class="alert alert-danger mb-1 mt-1">{{ $errors->first('beneficiaire') }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary form-control f">Appliquer</button>
</form>
</div>
@endsection