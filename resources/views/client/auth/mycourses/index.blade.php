@extends('client.auth.layout')

@section('title', 'หลักสูตรของฉัน')

@section('account.content')
    @livewire('client.auth.courses.item')
@endsection
