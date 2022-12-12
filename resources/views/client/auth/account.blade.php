@extends('client.auth.layout')

@section('title', config('app.name') . ' | Account')

@section('account.content')
    @livewire('client.auth.account')
@endsection
