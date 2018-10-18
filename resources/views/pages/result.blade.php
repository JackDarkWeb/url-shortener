@extends('templates.template', ['title'=>'Find your shortened url bellow'])

@section('content')

<h3>Find your shorten url below :</h3>
<a href="http://127.0.0.1/url-shortener/public/{{$shortened}}">http://myprojets.site/{{$shortened}}</a>

@stop