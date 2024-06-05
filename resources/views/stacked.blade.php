@extends('layout.main')

@section('menu')
        <li><a href="#">Page 3</a></li>
@endsection
        
@push('submenu')
        <li><a href="#">Page 3</a></li>
@endpush
        
@prepend('submenu')
        <li><a href="#">Page 4</a></li>
@endprepend
