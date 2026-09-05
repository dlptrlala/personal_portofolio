@extends('admin.layouts.app')

@section('title', 'Edit Project')
@section('heading', 'Edit Project')

@section('content')

<div class="form-card">

    <div class="form-card-header">
        <div>
            <h2>Edit Project</h2>
            <p>
                Perbarui informasi project.
            </p>
        </div>
    </div>

    <form
        action="{{ route('admin.projects.update', $project) }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        @include('admin.projects._form')

    </form>

</div>

@endsection
