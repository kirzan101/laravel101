@extends('layouts.app')

@section('content')
    <div>
        <h3>Edit User Group | <a href="/usergroups" class="btn btn-primary">Return</a></h3>
        <form method="POST" action="/usergroups/{{ $usergroup->id }}">
            @method('PUT')
            @csrf
            <input type="text" name="id" value="{{ $usergroup->id }}" hidden>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name"
                        name="name" value="{{ old('name') ? old('name') : $usergroup->name }}" placeholder="Name" >
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-4 mb-3">
                    <label for="code">Code</label>
                    <input type="text" class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" id="code"
                        name="code" value="{{ old('code') ? old('code') : $usergroup->code }}" placeholder="Code" $usergroup>
                    @if ($errors->has('code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('code') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-4 mb-3">
                    <label for="model">Department</label>
                    <div class="input-group mb-3">
                        <select class="custom-select {{ $errors->has('department_id' ? 'is-invalid' : '') }}" id="department" name="department_id" >
                            <option value="">-- select --</option>
                            @foreach ($departments as $department)
                                <option value="{{$department->id }}"
                                    {{ old('department_id') === $department->department_id || $department->id === $usergroup->department_id ? 'selected' : '' }}>
                                    {{$department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('department_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('department_id') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}"
                        id="description" name="description"
                        value="{{ old('description') ? old('description') :$usergroup->description }}"
                        placeholder="Description" >
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                </div>
            </div>

            <button class="btn btn-success" type="submit">Save</button>
        </form>
    </div>
@endsection
