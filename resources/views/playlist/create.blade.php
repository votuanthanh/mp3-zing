@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Playlist</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('books.store') }}">
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
                            <label for="description" class="col-md-4 col-form-label text-md-right">DESCRIPTION</label>
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
                            <label for="publication_year" class="col-md-4 col-form-label text-md-right">Publication Year</label>
                            <div class="col-md-6">
                                <input 
                                    id="publication_year" 
                                    type="publication_year" 
                                    class="form-control {{ $errors->has('publication_year') ? 'is-invalid' : '' }}" 
                                    name="publication year"
                                    value="{{ old('publication_year') }}">

                                @if ($errors->has('publication_year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('publication_year') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number_of_pages" class="col-md-4 col-form-label text-md-right">Number Of Pages</label>
                            <div class="col-md-6">
                                <input 
                                id="number_of_pages" 
                                type="number_of_pages" 
                                class="form-control {{ $errors->has('number_of_pages') ? 'is-invalid' : '' }}" 
                                name="number_of_pages"
                                value="{{ old('number_of_pages') }}">

                                @if ($errors->has('number_of_pages'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('number_of_pages') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">Author</label>
                            <div class="col-md-6">
                                <select 
                                id="author_id" 
                                class="form-control {{ $errors->has('author_id') ? 'is-invalid' : '' }}" 
                                name="author_id">
                                    @foreach($authors as $author)
                                        @php
                                            $selected = $author->id == old('author_id') ? 'selected' : '';
                                        @endphp
                                    <option value="">Select Author</option>
                                    <option value="{{ $author->id}}" {{ $selected}}>{{ $author->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('author_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('author_id') }}
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
