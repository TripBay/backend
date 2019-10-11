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
                            <th><span class="text-muted">Tags</span></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr class=" " data-id="{{ $article->id }}">
                                <td style="min-width:30px;text-align:center">
                                    <small class="text-muted">{{ $article->id }}</small>
                                </td>
                                <td>
                                    <a href="#" class="item-title text-color ">
                                        {{ str_limit($article->title, $limit=20, $end='...') }}
                                    </a>
                                </td>
                                <td >
                                    <div class="item-except text-muted text-sm h-1x">
                                        {{ str_limit($article->body, $limit = 50, $end = '...') }}
                                    </div>
                                </td>
                                <td>
                                    {{ $article->created_at->toFormattedDateString() }}
                                </td>
                                <td>
                                    <div class="item-except text-muted text-sm h-1x">
                                        None
                                    </div>
                                </td>
                                <td>
                                    <div class="item-action dropdown">
                                        <a href="#" data-toggle="dropdown" class="text-muted">
                                            <i data-feather="more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                            <a class="dropdown-item" href="#">
                                                See detail
                                            </a>
                                            <a class="dropdown-item edit" href="{{ route('articles.edit', $article->id) }}">
                                                Edit
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    Delete
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
</div>
@endsection