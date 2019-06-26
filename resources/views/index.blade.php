@extends('layouts.app')

@section('content')
    <form action="{{ route('user.calculate') }}" method="post">
        @csrf
        @include('partials.form')
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-secondary col-3" name="submit" value="calculate"><b>Подсчитать</b></button>
        </div>
    </form>
@endsection
