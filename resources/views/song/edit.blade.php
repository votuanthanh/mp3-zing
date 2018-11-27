@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit a song</div>
                
                @if(Session::has('message'))
                    <div class="alert alert-success"> {{ Session::get('message') }}</div>
                @endif

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" enctype="multipart/form-data" action="{{ route('song.update', $id) }}">
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
                                            {{ $errors->first('name') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <textarea 
                                    id="description"
                                    type="description" 
                                    class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" 
                                    name="description"
                                    value="{{ old('description') }}"></textarea>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('description') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="file_name" class="col-md-4 col-form-label text-md-right">File Name</label>
                            <div class="col-md-6">
                                <input id="file_name" type="file" class="custom-file-input" name="file_name">
                                <label class="custom-file-label" for="file_name">Choose file</label>
                                @if ($errors->has('file_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('file_name') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="composer" class="col-md-4 col-form-label text-md-right">Composer</label>
                            <div class="col-md-6">
                                <select 
                                id="composer_id" 
                                class="form-control {{ $errors->has('composer_id') ? 'is-invalid' : '' }}" 
                                name="composer_id">
                                    <option value="">Select Composer</option>
                                    @foreach($composers as $composer)
                                        @php
                                            $selected = $composer->id == old('composer_id') ? 'selected' : '';
                                        @endphp
                                        <option value="{{ $composer->id }}" {{ $selected }}>{{ $composer->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('composer_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('composer_id') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cover_image" class="col-md-4 col-form-label text-md-right">Cover Image</label>
                            <div class="col-md-6">
                                <input id="cover_image" type="file" class="custom-file-input" name="cover_image">
                                <label class="custom-file-label" for="cover_image">Choose file</label>
                                @if ($errors->has('cover_image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('cover_image') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>
                            <div class="col-md-6">
                                <input 
                                    id="year" 
                                    type="year" 
                                    class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" 
                                    name="year"
                                    value="{{ old('year') }}">

                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('year') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">Genre</label>
                            <div class="col-md-6">
                                <input 
                                    id="genre" 
                                    type="genre" 
                                    class="form-control {{ $errors->has('genre') ? 'is-invalid' : '' }}" 
                                    name="genre"
                                    value="{{ old('genre') }}">

                                @if ($errors->has('genre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('genre') }}
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