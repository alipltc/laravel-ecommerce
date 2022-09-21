@extends('layouts.admin')
@section('title', 'Blank-Page')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Categories</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Category Form</h5>

                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{ route('dashboard_category_create') }}">
                            @csrf
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Parent</label>
                                <select id="inputState" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="Keywords" class="form-label">Keywords</label>
                                <input type="text" name="keywords" class="form-control" id="Keywords">
                            </div>
                            <div class="col-12">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" id="description">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Add Category</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>

                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
