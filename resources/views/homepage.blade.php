@extends('template.app')

@section('content')
    <img src="{{ asset('images/img1.jpg') }}" alt="" class="img-fluid">
    Home Page.

    {{-- IF ELSE --}}
    @if (9>10)
    <p>Nine is greater</p>
    @elseif(9==10)
        <p>Both are equal</p>
    @else
        <p>Nine is lowest</p>    
    @endif

    {{-- UNLESS --}}
    {{-- JABA SAMMA DATA EMPTY XAINA TABA SAMMA PRINT GARNU --}}
    @unless (empty('data'))
        <p>There is {{ $data }}</p>
    @endunless

    {{-- EMPTY --}}
    @empty($data1)
        <p>There is no data</p>
    @endempty

    {{-- ISSET --}}
    @isset($data)
    <p>There is data called {{ $data }} set.</p>
    @endisset

    {{-- SWITCH CASE --}}
    @switch($data)
        @case('Ram')
            <p>Data : {{ $data }}</p>
            @break
        @case('Yunesh')
           <p>Data : {{ $data }}</p>
            @break
        @default
            <p>No data</p>
    @endswitch
@endsection