@extends('admin.layouts.app')

@section('title', 'Projects')
@section('heading', 'My Projects')

@section('content')

<div class="page-actions">
    <div>
        <p class="page-description">
            Kelola project yang tampil di halaman portfolio.
        </p>
    </div>

    <a
        href="{{ route('admin.projects.create') }}"
        class="admin-btn primary"
    >
        <i class="fa-solid fa-plus"></i>
        Add Project
    </a>
</div>

<div class="stats-grid">

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fa-solid fa-folder"></i>
        </div>

        <div>
            <span>Total Projects</span>
            <strong>{{ $projects->total() }}</strong>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fa-solid fa-database"></i>
        </div>

        <div>
            <span>Database</span>
            <strong>MySQL</strong>
        </div>
    </div>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fa-solid fa-code"></i>
        </div>

        <div>
            <span>Framework</span>
            <strong>Laravel</strong>
        </div>
    </div>

</div>

<div class="table-card">

    <div class="table-header">
        <div>
            <h2>Project List</h2>
            <p>Data project portfolio kamu.</p>
        </div>
    </div>

    <div class="table-wrapper">

        <table class="project-table">

            <thead>
                <tr>
                    <th>Project</th>
                    <th>Category</th>
                    <th>Technology</th>
                    <th>Links</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($projects as $project)

                    <tr>

                        <td>
                            <div class="table-project">

                                @if($project->image)
                                    <img
                                        src="{{ asset('storage/' . $project->image) }}"
                                        alt="{{ $project->title }}"
                                    >
                                @else
                                    <div class="table-placeholder">
                                        <i class="fa-solid fa-image"></i>
                                    </div>
                                @endif

                                <div>
                                    <strong>
                                        {{ $project->title }}
                                    </strong>

                                    <small>
                                        {{ Str::limit($project->description, 70) }}
                                    </small>
                                </div>

                            </div>
                        </td>

                        <td>
                            <span class="category-badge">
                                {{ $project->category_label }}
                            </span>
                        </td>

                        <td>
                            {{ $project->technology ?? '-' }}
                        </td>

                        <td>
                            <div class="table-links">

                                @if($project->github_url)
                                    <a
                                        href="{{ $project->github_url }}"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        GitHub
                                    </a>
                                @endif

                                @if($project->demo_url)
                                    <a
                                        href="{{ $project->demo_url }}"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        Demo
                                    </a>
                                @endif

                                @if(!$project->github_url && !$project->demo_url)
                                    -
                                @endif

                            </div>
                        </td>

                        <td>
                            <div class="action-buttons">

                                <a
                                    href="{{ route('admin.projects.show', $project) }}"
                                    class="icon-btn view"
                                    title="View"
                                >
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a
                                    href="{{ route('admin.projects.edit', $project) }}"
                                    class="icon-btn edit"
                                    title="Edit"
                                >
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form
                                    action="{{ route('admin.projects.destroy', $project) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus project ini?')"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="icon-btn delete"
                                        title="Delete"
                                    >
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="empty-table">
                            Belum ada project.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    @if($projects->hasPages())
        <div class="pagination-wrapper">
            {{ $projects->links() }}
        </div>
    @endif

</div>

@endsection
