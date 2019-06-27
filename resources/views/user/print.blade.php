@extends('layouts.app')

@section('content')
    <a href="#" onClick="print()" class="d-print-none btn btn-outline-secondary btn-sm mr-3 mb-3">
        Распечатать
    </a>
    <a onclick="javascript:history.back(); return false;" class="d-print-none btn btn-outline-secondary btn-sm mr-3 mb-3">
        Назад
    </a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">{{ $academic_year }} учебный год. {{ $semester }}</th>
      <th scope="col" colspan="11">Кол-во студентов: {{ $students }}</th>
    </tr>
    <tr>
      <th scope="col" class="text-center align-middle">ФИО преподавателя,<br> название предмета,<br> курс, группа</th>
      <th scope="col" class="text-center align-middle">"5"</th>
      <th scope="col" class="text-center align-middle">%</th>
      <th scope="col" class="text-center align-middle">"4"</th>
      <th scope="col" class="text-center align-middle">%</th>
      <th scope="col" class="text-center align-middle">"3"</th>
      <th scope="col" class="text-center align-middle">%</th>
      <th scope="col" class="text-center align-middle">"2"<br>н/а</th>
      <th scope="col" class="text-center align-middle">%</th>
      <th scope="col" class="text-center align-middle">ПУ</th>
      <th scope="col" class="text-center align-middle">КПУ</th>
      <th scope="col" class="text-center align-middle">С/А</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-center align-middle">{{ $name }} <br> {{ $discipline }}, {{ $group }}</td>
      <td class="text-center align-middle">{{ $mark5 }}</td>
      <td class="text-center align-middle">{{ $percents['mark5'] }}</td>
      <td class="text-center align-middle">{{ $mark4 }}</td>
      <td class="text-center align-middle">{{ $percents['mark4'] }}</td>
      <td class="text-center align-middle">{{ $mark3 }}</td>
      <td class="text-center align-middle">{{ $percents['mark3'] }}</td>
      <td class="text-center align-middle">{{ $mark2 }}</td>
      <td class="text-center align-middle">{{ $percents['mark2'] }}</td>
      <td class="text-center align-middle">{{ $pu }}</td>
      <td class="text-center align-middle">{{ $kpu }}</td>
      <td class="text-center align-middle">{{ $ca }}</td>
    </tr>
  </tbody>
</table>
@endsection
