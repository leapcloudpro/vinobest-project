@extends('admin.layouts.app')

@section('wineTypes', 'active')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pb-2 mb-3 border-bottom">
                <h2>{{ __('Wijnen') }}</h2>
            </div>
            @if (session('status'))
            <div class="alert alert-dismissible alert-success">{{ session('status') }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            @endif
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has($msg))
                    <p class="alert alert-dismissible alert-{{ $msg }}">
                        {{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </p>
                @endif
            @endforeach
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Naam') }}</th>
                                <th>{{ __('Acties') }}</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($wineTypes as $wineType)
                            <tr>
                                <td>{{ $wineType->id }}</td>
                                <td>{{ $wineType->name }}</td>
                                <td style="width:15%;">
                                    <form action="{{ route('admin.winetypes.destroy', $wineType->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-primary" href="{{ route('admin.winetypes.edit', $wineType->id) }}">{{ __('Edit') }}</a>

                                        <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a class="btn btn-secondary" href="{{ route('admin.winetypes.create') }}">{{ __('Wijn toevoegen') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
