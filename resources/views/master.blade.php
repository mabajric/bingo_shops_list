@extends('layouts.base')

@section('content')
    <embed-map @list-of-places-changed="listOfPlacesUpdated"></embed-map>
    <save-shops :list-of-shops="arrayOfPlaces"></save-shops>
@endsection
