@extends('admin.layouts.app')

@section('title', 'Add Project')
@section('heading', 'Add Project')

@section('content')

<div class="form-card">

    <div class="form-card-header">
        <div>
            <h2>Create New Project</h2>
            <p>
                Project yang kamu simpan di sini akan otomatis
                muncul di halaman portfolio.
            </p>
        </div>
    </div>

    <form
        action="{{ route('admin.projects.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        @include('admin.projects._form')

    </form>

</div>

@endsection
