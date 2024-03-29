@extends('layouts.app')

@section('content')
    <div>
        <h3>Show Stock | <a href="/items/{{ $stock->item->id }}" class="btn btn-primary">Return</a></h3>
        <form>
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="serial_number">Serial Number</label>
                    <input type="text" class="form-control {{ $errors->has('serial_number') ? 'is-invalid' : '' }}"
                        id="code" name="serial_number" placeholder="serial_number"
                        value="{{ old('serial_number') ? old('serial_number') : $stock->serial_number }}" disabled>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="code">Code</label>
                    <input type="text" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" id="code"
                        name="code" placeholder="Code" value="{{ (old('code')) ? old('code') : $stock->code }}" disabled>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="manufacture_date">Manufacture date</label>
                    <input type="date" class="form-control {{ $errors->has('manufacture_date') ? 'is-invalid' : '' }}"
                        id="manufacture_date" name="manufacture_date" placeholder="Manufacture date" value="{{ (old('manufacture_date')) ? old('manufacture_date') : $stock->manufacture_date }}" disabled>
                </div>
            </div>
        </form>
    </div>
@endsection
