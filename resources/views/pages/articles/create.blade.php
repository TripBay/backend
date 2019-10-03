@extends('layouts.master')

@section('content')
<div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Article</strong>
                        </div>

                        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label class="col-sm-4 col-form-label">Title</label>
                                        <input type="text" class="form-control circle" name="title" placeholder="Title here..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label class="col-sm-4 col-form-label">Body</label>
                                        <div class="mb-3 card">
                                        {{-- <textarea name="body" id="editor" class="editor"></textarea> --}}

                                        <div data-plugin="summernote" data-option="{height:300}"></div>
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