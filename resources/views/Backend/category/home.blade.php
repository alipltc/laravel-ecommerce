@extends('layouts.admin')
@section('title', 'Categories')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Categories</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category List</h4>
                        <p><button type="button" class="btn btn-success"><i class="ri-menu-add-fill"></i> Add Category</button></p>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Parent</th>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ ($category->parent_id == 0 ? "Main" : "$category->parent_id")  }}</td>
                                <td>{{ $category->title }}</td>
                                <td>
                                    @if( $category->status == 1 )
                                        <span class="badge rounded-pill bg-success">Active</span>
                                    @else
                                        <span class="badge rounded-pill bg-danger">Passive</span>
                                    @endif
                                </td>
                                <td><button type="button" class="btn btn-primary btn-sm">Update</button></td>
                                <td><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
