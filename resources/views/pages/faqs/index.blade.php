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
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="table-responsive">
                <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                    <thead>
                        <tr>
                            <th><span class="text-muted">ID</span></th>
                            <th><span class="text-muted">Title</span></th>
                            <th><span class="text-muted">Body</span></th>
                            <th><span class="text-muted">Date created:</span></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqs as $faq)
                            <tr class=" " data-id="{{ $faq->id }}">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $faq->id }}</small>
                                </td>
                                <td>
                                    <a href="#" class="item-title text-color ">
                                        {{ str_limit($faq->title, $limit=20, $end='...') }}
                                    </a>
                                </td>
                                <td >
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ str_limit($faq->body, $limit = 50, $end = '...') }}
                                    </div>
                                </td>
                                <td>
                                    {{ $faq->created_at->toFormattedDateString() }}
                                </td>
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="#faqs">
                                                See detail
                                            </a>
                                            <a href="{{ route('faqs.edit', $faq->id) }}" class="dropdown-item edit">
                                                Edit
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="dropdown-item trash" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    Delete item
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p>
                            <strong>Frequently asked</strong>
                        </p>
                        <div class="mb-4" id="faqs">
                            @foreach($faqs as $faq)
                                
                                <div class="card mb-2">
                                    <div class="card-header no-border">
                                        <a data-toggle="collapse" data-target="#c_{{ $faq->id }}">
                                            <strong>Q:</strong> {{ $faq->title }}
                                        </a>
                                    </div>
                                    <div id="c_{{ $faq->id }}" class="collapse in b-t">
                                        <div class="card-body">
                                            <div class="float-left mr-2"><span class="text-md w-32 avatar circle bg-success">A</span></div>
                                            <p class="text-muted">{{ $faq->body }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection