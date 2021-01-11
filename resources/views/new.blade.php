@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Drill Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('drills.new') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_name" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                                <div class="col-md-6">
                                    <input id="category_name" type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ old('category_name') }}" autocomplete="category_name" autofocus>

                                    @error('category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="problem0" class="col-md-4 col-form-label text-md-right">{{ __('Problem').'1' }}</label>

                                <div class="col-md-6">
                                    <input id="problem0" type="text" class="form-control @error('problem0') is-invalid @enderror" name="problem0" value="{{ old('problem0') }}" autocomplete="problem0" autofocus>

                                    @error('problem0')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="problem1" class="col-md-4 col-form-label text-md-right">{{ __('Problem').'2' }}</label>

                                <div class="col-md-6">
                                    <input id="problem1" type="text" class="form-control @error('problem1') is-invalid @enderror" name="problem1" value="{{ old('problem1') }}" autocomplete="problem1" autofocus>

                                    @error('problem1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="problem2" class="col-md-4 col-form-label text-md-right">{{ __('Problem').'3' }}</label>

                                <div class="col-md-6">
                                    <input id="problem2" type="text" class="form-control @error('problem2') is-invalid @enderror" name="problem2" value="{{ old('problem2') }}" autocomplete="problem0" autofocus>

                                    @error('problem2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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
