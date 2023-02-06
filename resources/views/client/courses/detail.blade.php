@extends('layouts.client.app')

@section('title', 'หลักสูตร')

@section('content')
    <!--------- Content  ---------->
    @livewire('client.courses.detail', ['id' => $id])

@endsection
