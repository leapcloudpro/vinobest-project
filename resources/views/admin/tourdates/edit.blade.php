@extends('admin.layouts.app')

@section('tourdates', 'active')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pb-2 mb-3 border-bottom">
                <h2>{{ __('Proeverij bewerken') }}</h2>
            </div>
            <div class="card">
                <form action="{{ route('admin.tourdates.update', $tourDate->id) }}" method="post">
                    <div class="card-body">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="inputDate">{{ __('Proeverij datum') }}</label>
                            <input type="text" name="date" class="form-control @error('date') is-invalid @enderror" id="inputDate" value="{{ $tourDate->date }}" placeholder="{{ __('Datum...') }}">
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputSeats">{{ __('Aantal plaatsen') }}</label>
                            <input type="number" name="seats" class="form-control @error('seats') is-invalid @enderror" id="inputSeats" value="{{ $tourDate->seats }}" placeholder="{{ __('Aantal plaatsen...') }}">
                            @error('seats')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputPrice">{{ __('Aantal plaatsen') }}</label>
                            <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" id="inputPrice" value="{{ $tourDate->price }}" placeholder="{{ __('Prijs...') }}">
                            @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Bijwerken') }}</button>
                        <a class="btn btn-secondary" href="{{ route('admin.tourdates.index') }}">{{ __('Terug naar proeverijen overzicht') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
