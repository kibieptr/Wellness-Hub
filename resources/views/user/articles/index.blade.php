@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Articles</h1>
        <p class="mb-4">List of all the articles published in the Wellness Hub. You can create, edit, or delete articles here.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Articles List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td>
                                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form method="POST" action="{{ route('articles.destroy', $article->id) }}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Create New Article Button -->
        <a href="{{ route('articles.create') }}" class="btn btn-success btn-sm">Create New Article</a>
    </div>
@endsection

@push('styles')
    <!-- DataTables CSS (Optional, if you want to use DataTable features) -->
    <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <!-- DataTables JS (Optional, if you want to use DataTable features) -->
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endpush
