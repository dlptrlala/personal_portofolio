<div class="form-grid">

    <div class="form-group full">
        <label for="title">
            Project Title <span>*</span>
        </label>

        <input
            type="text"
            id="title"
            name="title"
            value="{{ old('title', $project->title ?? '') }}"
            placeholder="Contoh: Traffic Crash Severity Classification"
            required
        >
    </div>

    <div class="form-group">
        <label for="category">
            Category <span>*</span>
        </label>

        <select id="category" name="category" required>

            @foreach([
                'data' => 'Data',
                'web' => 'Web',
                'java' => 'Java',
                'other' => 'Other'
            ] as $value => $label)

                <option
                    value="{{ $value }}"
                    @selected(old('category', $project->category ?? '') === $value)
                >
                    {{ $label }}
                </option>

            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="category_label">
            Category Label <span>*</span>
        </label>

        <input
            type="text"
            id="category_label"
            name="category_label"
            value="{{ old('category_label', $project->category_label ?? '') }}"
            placeholder="Contoh: Data Science"
            required
        >
    </div>

    <div class="form-group full">
        <label for="description">
            Description <span>*</span>
        </label>

        <textarea
            id="description"
            name="description"
            rows="5"
            placeholder="Jelaskan project kamu..."
            required
        >{{ old('description', $project->description ?? '') }}</textarea>
    </div>

    <div class="form-group full">
        <label for="technology">
            Technologies
        </label>

        <input
            type="text"
            id="technology"
            name="technology"
            value="{{ old('technology', $project->technology ?? '') }}"
            placeholder="Python • Pandas • XGBoost"
        >
    </div>

    <div class="form-group">
        <label for="github_url">
            GitHub URL
        </label>

        <input
            type="url"
            id="github_url"
            name="github_url"
            value="{{ old('github_url', $project->github_url ?? '') }}"
            placeholder="https://github.com/..."
        >
    </div>

    <div class="form-group">
        <label for="demo_url">
            Live Demo URL
        </label>

        <input
            type="url"
            id="demo_url"
            name="demo_url"
            value="{{ old('demo_url', $project->demo_url ?? '') }}"
            placeholder="https://..."
        >
    </div>

    <div class="form-group full">
        <label for="image">
            Project Image
        </label>

        @if(isset($project) && $project->image)
            <div class="current-image">
                <img
                    src="{{ asset('storage/' . $project->image) }}"
                    alt="{{ $project->title }}"
                >
            </div>
        @endif

        <input
            type="file"
            id="image"
            name="image"
            accept=".jpg,.jpeg,.png,.webp"
            {{ isset($project) ? '' : 'required' }}
        >

        <small>
            JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
        </small>
    </div>

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
        <i class="fa-solid fa-floppy-disk"></i>
        {{ isset($project) ? 'Update Project' : 'Save Project' }}
    </button>

</div>
