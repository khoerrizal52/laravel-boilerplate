@extends('admin.layouts.admin')

@section('title', __('views.admin.blogs.listblog.title'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="/admin/blog/create"><button>Create</button></a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>@sortablelink('title', __('views.admin.blogs.listblog.table_header_0'),['page' => $blogs->currentPage()])</th>
                <th style="width: 50%">@sortablelink('content',  __('views.admin.blogs.listblog.table_header_1'),['page' => $blogs->currentPage()])</th>
                <th>@sortablelink('created_at', __('views.admin.blogs.listblog.table_header_2'),['page' => $blogs->currentPage()])</th>
                <th>@sortablelink('updated_at', __('views.admin.blogs.listblog.table_header_3'),['page' => $blogs->currentPage()])</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td style="width: 50%">{{ $blog->content }}</td>
                    <td>{{ $blog->created_at }}</td>
                    <td>{{ $blog->updated_at }}</td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.users.show', [$blog->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.show') }}">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a class="btn btn-xs btn-info" href="{{ route('admin.users.edit', [$blog->id]) }}" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.edit') }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a href="{{ route('admin.users.destroy', [$blog->id]) }}" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="{{ __('views.admin.users.index.delete') }}">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {{ $blogs->links() }}
        </div>
    </div>
@endsection
