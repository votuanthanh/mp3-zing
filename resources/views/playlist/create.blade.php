@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Playlist</div>

                @if(Session::has('message'))
                    <div class="alert alert-success"> {{ Session::get('message') }}</div>
                @endif

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('playlist.store') }}">
                       @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input 
                                    id="name" 
                                    type="name" 
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                                    name="name" 
                                    value="{{ old('name') }}">

                                 @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('<name></name>') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">Songs</label>
                            <div class="col-md-6">
                                <select 
                                id="song_id" 
                                class="form-control {{ $errors->has('song_id') ? 'is-invalid' : '' }}" 
                                name="song_id[]">
                                    <option value="">Select Song</option>
                                    @foreach($songs as $song)
                                        @php
                                            $selected = $song->id == old('song_id') ? 'selected' : '';
                                        @endphp
                                        <option value="{{ $song->id }}" {{ $selected }}>{{ $song->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('song_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('song_id') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">Songs</label>
                            <div class="col-md-6">
                                <select 
                                id="song_id" 
                                class="form-control {{ $errors->has('song_id') ? 'is-invalid' : '' }}" 
                                name="song_id[]">
                                    <option value="">Select Song</option>
                                    @foreach($songs as $song)
                                        @php
                                            $selected = $song->id == old('song_id') ? 'selected' : '';
                                        @endphp
                                        <option value="{{ $song->id }}" {{ $selected }}>{{ $song->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('song_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('song_id') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">Songs</label>
                            <div class="col-md-6">
                                <select 
                                id="song_id" 
                                class="form-control {{ $errors->has('song_id') ? 'is-invalid' : '' }}" 
                                name="song_id[]">
                                    <option value="">Select Song</option>
                                    @foreach($songs as $song)
                                        @php
                                            $selected = $song->id == old('song_id') ? 'selected' : '';
                                        @endphp
                                        <option value="{{ $song->id }}" {{ $selected }}>{{ $song->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('song_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('song_id') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">Songs</label>
                            <div class="col-md-6">
                                <select 
                                id="song_id" 
                                class="form-control {{ $errors->has('song_id') ? 'is-invalid' : '' }}" 
                                name="song_id[]">
                                    <option value="">Select Song</option>
                                    @foreach($songs as $song)
                                        @php
                                            $selected = $song->id == old('song_id') ? 'selected' : '';
                                        @endphp
                                        <option value="{{ $song->id }}" {{ $selected }}>{{ $song->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('song_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('song_id') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="song" class="col-md-4 col-form-label text-md-right">Songs</label>
                            <div class="col-md-6">
                                <select 
                                id="song_id" 
                                class="form-control {{ $errors->has('song_id') ? 'is-invalid' : '' }}" 
                                name="song_id[]">
                                    <option value="">Select Song</option>
                                    @foreach($songs as $song)
                                        @php
                                            $selected = $song->id == old('song_id') ? 'selected' : '';
                                        @endphp
                                        <option value="{{ $song->id }}" {{ $selected }}>{{ $song->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('song_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('song_id') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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
