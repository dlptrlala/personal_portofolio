@extends('admin.layouts.app')

@section('title', $project->title)
@section('heading', 'Project Detail')

@section('content')

<div class="detail-card">

    <div class="detail-image">

        @if($project->image)
            <img
                src="{{ asset('storage/' . $project->image) }}"
                alt="{{ $project->title }}"
            >
        @else
            <div class="detail-placeholder">
                <i class="fa-solid fa-image"></i>
                <span>No image</span>
            </div>
        @endif

    </div>

    <div class="detail-content">

        <span class="category-badge">
            {{ $project->category_label }}
        </span>

        <h2>
            {{ $project->title }}
        </h2>

        <p class="detail-description">
            {{ $project->description }}
        </p>

        @if($project->technology)
            <div class="detail-row">
                <strong>Technology</strong>
                <span>{{ $project->technology }}</span>
            </div>
        @endif

        <div class="detail-links">

            @if($project->github_url)
                <a
                    href="{{ $project->github_url }}"
                    target="_blank"
                    rel="noopener"
                    class="admin-btn secondary"
                >
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </a>
            @endif

            @if($project->demo_url)
                <a
                    href="{{ $project->demo_url }}"
                    target="_blank"
                    rel="noopener"
                    class="admin-btn secondary"
                >
                    <i class="fa-solid fa-globe"></i>
                    Live Demo
                </a>
            @endif

        </div>

        <div class="form-actions">

            <a
                href="{{ route('admin.projects.index') }}"
                class="admin-btn secondary"
            >
                Back
            </a>

            <a
                href="{{ route('admin.projects.edit', $project) }}"
                class="admin-btn primary"
            >
                <i class="fa-solid fa-pen"></i>
                Edit Project
            </a>

        </div>

    </div>

</div>

@endsection
