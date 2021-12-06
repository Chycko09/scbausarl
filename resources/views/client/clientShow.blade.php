@extends('layout.maquette')
@section('titre')
    Client
@endsection
@section('sous_titre')
    Profil du client
@endsection
@section('content')
<div class="col-10 row">
    <div class="col-3">
        <img src="img/boy.png" class="img-thumbnail" alt="...">
    </div>
    <div class="col-4">
       <strong> <span>Tiger Nixon</span></strong><br>
        <span>Né le 12/12/1212 à GUIBEROUA</span><br>
        <span>Employé de INESCA CI</span>...
        <a href=""><i class="fas fa-user-edit text-success"></i></a>
        <a href=""><i class="fas fa-user-times text-danger"></i></a>
    </div>
    <div class="col-4">
        <a href="{{route('ajoutPaiement')}}">
            <button type="button" class="btn-success float-center"><i class="fas fa-money-check">Effectuer un paiement</i></button>
        </a><br><br>
        <a href="{{route('ajoutSouscription')}}">
            <button type="button" class="btn btn-success float-center"><i class="fas fa-plus">Nouvelle souscription</i></button>
        </a>
    </div>
</div>
@endsection
