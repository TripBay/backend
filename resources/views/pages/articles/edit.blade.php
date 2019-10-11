@extends('layouts.master')

@section('content')
<div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit Article</strong>
                        </div>

                        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="hidden" name="id" value="{{ $article->id }}">
                                        <label class="col-sm-4 col-form-label">Title</label>
                                        <input type="text" class="form-control circle @error('title') is-invalid @enderror" 
                                        name="title" placeholder="Title here.." value="{{ old('title') ?? $article->title }}">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label class="col-sm-4 col-form-label">Body</label>
                                        <div class="mb-3 card">
                                        <textarea name="body" id="editor" class="editor form-control @error('body') is-invalid @enderror" 
                                        data-plugin="editor">{{ old('body') ?? $article->body }}</textarea>
                                        @error('body')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        {{-- <div data-plugin="summernote" data-option="{height:300}"></div> --}}
                                        </div>
                                    </div>
                                </div>
    
    
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-6">
                                        <label class="col-sm-4 col-form-label">Featured Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="featured_image" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-raised btn-wave mb-2 w-xs green text-white" type="submit" style="float:right">Green</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection