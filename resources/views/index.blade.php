@extends('layouts.app')

@section('content')
    <form action="{{ route('calculate') }}" method="post">
        @csrf
        @include('partials.form')
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-secondary col-3"><b>Подсчитать</b></button>
        </div>
    </form>
@endsection
