@extends('layouts.app');
@section('content')
<div class="container-fluid mt-2 " style="max-width: 80%;">
<div class="btn danger justify-content-end">
    <form action="{{ route('logout') }}" method="post">
          @csrf
          <input type="submit" value="Se deconnecter" class="btn btn-danger">
    </form>
</div>
</div>
@endsection