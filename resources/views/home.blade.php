@extends('layouts/.main')

@section('content')

<p>I treni che partono oggi sono:</p>

<ul class="list-group">
    @foreach ($treni as $treno )
        <li class="list-group-item">Il treno di {{ $treno->azienda }} verso {{ $treno->stazione_arrivo }} da {{$treno->stazione_partenza}} di codice {{$treno->codice_treno}}</li>
    @endforeach
</ul>
@endsection