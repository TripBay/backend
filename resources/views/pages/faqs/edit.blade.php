@extends('layouts.master')

@section('content')
<div>
    <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Datatables</h2>
                <small class="text-muted">Tables plug-in for jQuery</small>
            </div>
            <div class="flex"></div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <strong>Edit Faq</strong>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('faqs.update', $faq->id) }}">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label class="text-muted" for="Title">Title</label>
                    <input type="text" id="Title" class="form-control" name="title" placeholder="Title here.." value="{{ old('content') ?? $faq->title }}">
                </div>
                <div class="form-group">
                    <label class="text-muted" for="Body">Body</label>
                    <textarea name="body" id="Body"class="form-control" placeholder="Body here..">{{ old('content') ?? $faq->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection