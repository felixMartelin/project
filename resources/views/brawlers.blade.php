@extends('template')

@section('titrePage')
    Page Brawlers
    @endsection

@section('titreItem')

    @endsection

@section('contenu')
    @foreach($lebrawler as $brawler)
        <h2> Fiche Descriptive du Brawler :</h2>
        <br/>
        <h4> Nom du Brawler : {{ $brawler->getNomBrawler() }} </h4>
        <h4> Rareté du Brawler : {{ $brawler->getRareteBrawler() }} </h4>
        <h4> Description du Brawler : {{ $brawler->getNomBrawler() }} </h4>
        <h4> Nom du Stat Power : {{ $brawler->getStarPowerBrawler() }} </h4>
        <h4> Description du Star Power : {{ $brawler->getDescStarPower() }} </h4>
        <br/><br/>
        <h2> Statistiques du Brawler : </h2>
        <br/>
        <h4> Point de Vie du Brawler : {{ $brawler->getVieBrawler() }} </h4>
        <h4> Dégâts du Brawler : {{ $brawler->getDegatBrawler() }} </h4>
        <h4> Dégâts du Super : {{ $brawler->getDegatSuperBrawler() }} </h4>
    @endforeach
    @endsection