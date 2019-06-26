<div class="row">
    <div class="col">
        <h4>Оценки</h4>
    </div>
        <button type="submit" class="btn btn-outline-secondary btn-sm mr-3 mb-3" name="submit" value="print">
            <b>Предпросмотр (печать)</b>
        </button>
    <button type="reset" onClick="window.location.href=window.location.href" class="btn btn-outline-danger btn-sm mr-3 mb-3"><b>Очистить форму</b></button>
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Кол-во студентов</span>
    </div>
    <input type="text" class="form-control @error('students') is-invalid @enderror" name="students" id="students" value="{{ $students ?? old('students') }}">
        @error('students')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>

<div class="form-row mb-3">
    <div class="col-3">
        <label for="">Кол-во «5»</label>
        <input type="number" class="form-control @error('mark5') is-invalid @enderror" name="mark5" id="mark5" value="{{ $mark5 ?? old('mark5') }}">
        @error('mark5')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="">Кол-во «4»</label>
        <input type="number" class="form-control @error('mark4') is-invalid @enderror" name="mark4" id="mark4" value="{{ $mark4 ?? old('mark4') }}">
        @error('mark4')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="">Кол-во «3»</label>
        <input type="number" class="form-control @error('mark3') is-invalid @enderror" name="mark3" id="mark3" value="{{ $mark3 ?? old('mark3') }}">
        @error('mark3')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-3">
        <label for="">Кол-во «2»</label>
        <input type="number" class="form-control @error('mark2') is-invalid @enderror" name="mark2" id="mark2" value="{{ $mark2 ?? old('mark2') }}">
        @error('mark2')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row justify-content-center mb-1">
    <a class="btn btn-link" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse">
        Дополнительные поля для печатного отчета
    </a>
</div>
<div class="collapse {{ $collapse ?? '' }}" id="collapse">
    <div class="form-group">
        <div class="form-row">
            <div class="col-5">
                <label for="name">ФИО преподавателя</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{$name ?? old('name')}}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
            <div class="col-4">
                <label for="academic_year">Учебный год</label>
                <input type="text" class="form-control @error('academic_year') is-invalid @enderror" id="academic_year" name="academic_year"
                    value="{{$academic_year ?? old('academic_year')}}">
                    @error('academic_year')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
            <div class="col-3">
                <label for="semester">Семестр</label>
                <select class="custom-select @error('semester') is-invalid @enderror" id="semester" name="semester">
                    <option value="Не выбран" {{(($semester ?? old('semester')) == "Не выбран") ? "selected" : ""}}>
                        Не выбран
                    </option>
                    <option value="1 семестр" {{(($semester ?? old('semester')) == "1 семестр") ? "selected" : ""}}>
                        1 семестр
                    </option>
                    <option value="2 семестр" {{(($semester ?? old('semester')) == "2 семестр") ? "selected" : ""}}>
                        2 семестр
                    </option>
                </select>
                    @error('semester')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-5">
                <label for="discipline">Дисциплина</label>
                <input type="text" class="form-control @error('discipline') is-invalid @enderror" id="discipline" name="discipline"
                    value="{{$discipline ?? old('discipline')}}">
                    @error('discipline')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
            <div class="col-4">
                <label for="group">Группа</label>
                <input type="text" class="form-control @error('group') is-invalid @enderror" id="group" name="group"
                    value="{{$group ?? old('group')}}">
                    @error('group')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
        </div>
    </div>
</div>

@if(isset($kpu))
    <fieldset disabled class="mt-2">
        <h4>Показатели</h4>
        <div class="form-row">
            <div class="input-group mb-3 col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">«5»</span>
                </div>
                <input type="text" class="form-control" value="{{ $percents['mark5'] ?? old('percent5') }}">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
            <div class="input-group mb-3 col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">«4»</span>
                </div>
                <input type="text" class="form-control" value="{{ $percents['mark4'] ?? old('percent4') }}">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
            <div class="input-group mb-3 col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">«3»</span>
                </div>
                <input type="text" class="form-control" value="{{ $percents['mark3'] ?? old('percent3') }}">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
            <div class="input-group mb-3 col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">«2»</span>
                </div>
                <input type="text" class="form-control" value="{{ $percents['mark2'] ?? old('percent2') }}">
                <div class="input-group-append">
                    <span class="input-group-text">%</span>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="input-group mb-3 col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">КПУ</span>
                </div>
                <input type="text" class="form-control" value="{{ $kpu ?? old('kpu') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3 col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ПУ</span>
                </div>
                <input type="text" class="form-control" value="{{ $pu ?? old('pu') }}">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3 col-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">С/А</span>
                </div>
                <input type="text" class="form-control" value="{{ $ca ?? old('ca') }}">
            </div>
        </div>
    </fieldset>
@endif
