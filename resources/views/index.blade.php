@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-2">
    <img src="{{ asset('images/logo.jpg') }}" alt="">
</div>
<div class="col">
    <p>
        Цифровой отчет преподавателя - это уникальное программное обеспечение, которое позволит вам не задумываться о потерянных отчетах и позволит сосредоточиться на действительно важных делах
    </p>

    <p>Особенностями нашего продукта являются</p>

    <ul>
        <li>Хранение информации об успеваемости студентов по годам и семестрам обучения</li>
        <li>Вычисление таких показателей для учебных предметов, как:</li>
        <ul>
            <li>процента учащихся получивших по результатам учебного периода различные оценки (5, л. 3. 2).</li>
            <li>качественного показателя успеваемости (КПУ),</li>
            <li>абсолютный показатель успеваемости (ПУ),</li>
            <li> о среднего балла (С/А).</li>
        </ul>
    </ul>
    <p>
        Так же, в дальнейшем наш продукт будет совершенствоваться и расширять свои функциональные возможности по аналитике данных.
    </p>
</div>
</div>
@endsection
