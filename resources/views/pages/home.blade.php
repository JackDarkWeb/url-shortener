@extends('templates.template', ['title'=>'URL Shortener'])

@section('content')
    <h3>SHORTEN EVERY LINKS</h3>


    <form method="post" action="">
        {{csrf_field()}}
        <input type="text"  name="url" placeholder="Paste a link to shorten it" value="{{old('url')}}">
        <button type="submit" class="btn col-sm-4 font-weight-bold">Shorten</button>
        {!! $errors->first('url','<div class="alert-error"><p>:message</p></div>')!!}
    </form>
@stop