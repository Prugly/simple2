@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('auth.reset_password')}}</div>
                    <div class="card-body">
                        <form role="form" method="POST" action="{{ route('backend.password.reset.post') }}">
                            {!! csrf_field() !!}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">{{__('auth.email')}}</label>

                                <div class="col-lg-6">
                                    <input
                                            type="email"
                                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email"
                                            value="{{ $email or old('email') }}"
                                    >
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">{{__('auth.password')}}</label>

                                <div class="col-lg-6">
                                    <input
                                            type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password"
                                    >
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label text-lg-right">Confirma Contrase??a</label>
                                <div class="col-lg-6">
                                    <input
                                            type="password"
                                            class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                            name="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6 offset-lg-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{__('auth.reset_password')}}
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