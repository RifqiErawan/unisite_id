@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Edit Role') }}</div>
        <div class="card-body">
          <form method="POST" action="{{ route('manage.roles.update', $role) }}">
            @csrf
            @method('PATCH')
            <div class="form-group row">
              <label for="display_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
              <div class="col-md-6">
                <input id="display_name" type="text" class="form-control{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ $role->display_name }}" required autofocus>
                @if ($errors->has('display_name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('display_name') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Slug') }}</label>
              <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $role->name }}" required autofocus>
                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
              <div class="col-md-6">
                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $role->description }}" required autofocus>
                @if ($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('description') }}</strong>
                </span>
                @endif
              </div>
            </div>            
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                {{ __('Submit') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
@endsection