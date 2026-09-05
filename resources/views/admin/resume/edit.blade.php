@extends('admin.layouts.app')

<!-- @section('title', 'CV') -->
@section('heading', 'My CV')

@section('content')

<div class="form-card">

    <div class="form-card-header">

        <div>

            <h2>Manage CV</h2>

            <p>
                Upload CV terbaru yang akan digunakan
                pada tombol Download CV di portfolio.
            </p>

        </div>

    </div>


    @if($resume)

        <div class="resume-current">

            <div class="resume-icon">
                <i class="fa-solid fa-file-pdf"></i>
            </div>

            <div class="resume-info">

                <strong>
                    {{ $resume->file_name }}
                </strong>

                <small>
                    CV saat ini
                </small>

            </div>

            <a
                href="{{ asset('storage/' . $resume->file_path) }}"
                target="_blank"
                class="admin-btn secondary"
            >
                <i class="fa-solid fa-eye"></i>
                View CV
            </a>

        </div>

    @else

        <div class="resume-empty">

            <i class="fa-solid fa-file-pdf"></i>

            <p>
                Belum ada CV yang diupload.
            </p>

        </div>

    @endif


    <form
        action="{{ route('admin.resume.update') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')


        <div class="form-group">

            <label for="resume">
                {{ $resume ? 'Replace CV' : 'Upload CV' }}
                <span>*</span>
            </label>

            <input
                type="file"
                id="resume"
                name="resume"
                accept=".pdf"
                required
            >

            <small>
                Hanya PDF. Maksimal 10 MB.
            </small>

        </div>


        <div class="form-actions">

            <a
                href="{{ route('admin.projects.index') }}"
                class="admin-btn secondary"
            >
                Cancel
            </a>

            <button
                type="submit"
                class="admin-btn primary"
            >
                <i class="fa-solid fa-upload"></i>
                {{ $resume ? 'Replace CV' : 'Upload CV' }}
            </button>

        </div>

    </form>

</div>

@endsection