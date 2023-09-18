@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                @if (session('Success'))
                <div class="alert alert-success">
                    {{session('Success')}}
                </div>
                @endif

                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div style="text-align: center">
                    <form id="myForm" method="" action="">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone"  type="text" class="form-control @error('email') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" required>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       

                        <div class="row mb-3">
                            <label for="NIC" class="col-md-4 col-form-label text-md-end">{{ __('NIC') }}</label>

                            <div class="col-md-6">
                                <input id="NIC" type="number" class="form-control @error('NIC') is-invalid @enderror" name="NIC" value="{{ old('NIC') }}" required autocomplete="NIC" required>

                                @error('NIC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="width:100%">
                                    {{ __('Add User') }}
                                </button>
                            </div>
                        </div>
                    </form>
     
                    </div>
    
                    
                </div>
            </div>
        </div>
    </div>

</div>
                               <!-- Include the JavaScript file for form validation -->
                               <script src="{{ asset('js/form-validation.js') }}"></script>
    
@endsection
