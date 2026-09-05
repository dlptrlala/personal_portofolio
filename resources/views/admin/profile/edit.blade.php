@extends('admin.layouts.app')

@section('title', 'Profile Settings')
@section('heading', 'Profile Settings')

@section('content')

<div class="form-card">

    <div class="form-card-header">
        <div>
            <h2>Profile Photos</h2>
            <p>
                Upload dan atur posisi foto portfolio kamu.
            </p>
        </div>
    </div>


    <form
        action="{{ route('admin.profile.update') }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')


        {{-- =====================================================
             HERO PHOTO
        ====================================================== --}}

        <div class="profile-settings-section">

            <h3>Hero Photo</h3>

            <p class="profile-help">
                Foto yang tampil pada bagian utama portfolio.
            </p>


            {{-- LIVE PREVIEW --}}

            <div class="profile-live-preview">

                <div
                    class="profile-preview-image"
                    id="heroPreviewContainer"
                    style="
                        --position-x: {{ $profile->hero_position_x }}%;
                        --position-y: {{ $profile->hero_position_y }}%;
                        --rotation: {{ $profile->hero_rotation }}deg;
                    "
                >

                    @if($profile->hero_image)

                        <img
                            id="heroPreview"
                            src="{{ asset('storage/' . $profile->hero_image) }}"
                            alt="Hero Photo"
                        >

                    @else

                        <div
                            class="preview-placeholder"
                            id="heroPlaceholder"
                        >
                            <i class="fa-solid fa-image"></i>
                            <span>Preview Foto Hero</span>
                        </div>

                    @endif

                </div>

                <p class="preview-label">
                    Live Preview
                </p>

            </div>


            {{-- UPLOAD --}}

            <div class="form-group">

                <label for="hero_image">
                    Change Hero Photo
                </label>

                <input
                    type="file"
                    id="hero_image"
                    name="hero_image"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <small>
                    JPG, JPEG, PNG, atau WEBP. Maksimal 10 MB.
                </small>

            </div>


            {{-- POSITION --}}

            <div class="position-controls">

                <div class="form-group">

                    <label for="hero_position_x">
                        Horizontal Position
                    </label>

                    <input
                        type="range"
                        id="hero_position_x"
                        name="hero_position_x"
                        min="0"
                        max="100"
                        value="{{ $profile->hero_position_x }}"
                    >

                    <output id="heroXValue">
                        {{ $profile->hero_position_x }}%
                    </output>

                </div>


                <div class="form-group">

                    <label for="hero_position_y">
                        Vertical Position
                    </label>

                    <input
                        type="range"
                        id="hero_position_y"
                        name="hero_position_y"
                        min="0"
                        max="100"
                        value="{{ $profile->hero_position_y }}"
                    >

                    <output id="heroYValue">
                        {{ $profile->hero_position_y }}%
                    </output>

                </div>


                <div class="form-group">

                    <label for="hero_rotation">
                        Rotation
                    </label>

                    <input
                        type="range"
                        id="hero_rotation"
                        name="hero_rotation"
                        min="-180"
                        max="180"
                        value="{{ $profile->hero_rotation }}"
                    >

                    <output id="heroRotationValue">
                        {{ $profile->hero_rotation }}°
                    </output>

                </div>

            </div>

        </div>


        {{-- =====================================================
             ABOUT PHOTO
        ====================================================== --}}

        <div class="profile-settings-section">

            <h3>About Me Photo</h3>

            <p class="profile-help">
                Foto yang tampil pada bagian About Me.
            </p>


            {{-- LIVE PREVIEW --}}

            <div class="profile-live-preview">

                <div
                    class="profile-preview-image"
                    id="aboutPreviewContainer"
                    style="
                        --position-x: {{ $profile->about_position_x }}%;
                        --position-y: {{ $profile->about_position_y }}%;
                        --rotation: {{ $profile->about_rotation }}deg;
                    "
                >

                    @if($profile->about_image)

                        <img
                            id="aboutPreview"
                            src="{{ asset('storage/' . $profile->about_image) }}"
                            alt="About Photo"
                        >

                    @else

                        <div
                            class="preview-placeholder"
                            id="aboutPlaceholder"
                        >
                            <i class="fa-solid fa-image"></i>
                            <span>Preview Foto About</span>
                        </div>

                    @endif

                </div>

                <p class="preview-label">
                    Live Preview
                </p>

            </div>


            {{-- UPLOAD --}}

            <div class="form-group">

                <label for="about_image">
                    Change About Photo
                </label>

                <input
                    type="file"
                    id="about_image"
                    name="about_image"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <small>
                    JPG, JPEG, PNG, atau WEBP. Maksimal 10 MB.
                </small>

            </div>


            {{-- POSITION --}}

            <div class="position-controls">

                <div class="form-group">

                    <label for="about_position_x">
                        Horizontal Position
                    </label>

                    <input
                        type="range"
                        id="about_position_x"
                        name="about_position_x"
                        min="0"
                        max="100"
                        value="{{ $profile->about_position_x }}"
                    >

                    <output id="aboutXValue">
                        {{ $profile->about_position_x }}%
                    </output>

                </div>


                <div class="form-group">

                    <label for="about_position_y">
                        Vertical Position
                    </label>

                    <input
                        type="range"
                        id="about_position_y"
                        name="about_position_y"
                        min="0"
                        max="100"
                        value="{{ $profile->about_position_y }}"
                    >

                    <output id="aboutYValue">
                        {{ $profile->about_position_y }}%
                    </output>

                </div>


                <div class="form-group">

                    <label for="about_rotation">
                        Rotation
                    </label>

                    <input
                        type="range"
                        id="about_rotation"
                        name="about_rotation"
                        min="-180"
                        max="180"
                        value="{{ $profile->about_rotation }}"
                    >

                    <output id="aboutRotationValue">
                        {{ $profile->about_rotation }}°
                    </output>

                </div>

            </div>

        </div>


        {{-- BUTTON --}}

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
                Save Changes
            </button>

        </div>

    </form>

</div>

@endsection


@push('scripts')

<script>

document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | HERO
    |--------------------------------------------------------------------------
    */

    const heroInput = document.getElementById('hero_image');

    const heroContainer =
        document.getElementById('heroPreviewContainer');

    const heroX =
        document.getElementById('hero_position_x');

    const heroY =
        document.getElementById('hero_position_y');

    const heroRotation =
        document.getElementById('hero_rotation');

    const heroXValue =
        document.getElementById('heroXValue');

    const heroYValue =
        document.getElementById('heroYValue');

    const heroRotationValue =
        document.getElementById('heroRotationValue');


    function updateHeroPreview() {

        heroContainer.style.setProperty(
            '--position-x',
            heroX.value + '%'
        );

        heroContainer.style.setProperty(
            '--position-y',
            heroY.value + '%'
        );

        heroContainer.style.setProperty(
            '--rotation',
            heroRotation.value + 'deg'
        );


        heroXValue.textContent =
            heroX.value + '%';

        heroYValue.textContent =
            heroY.value + '%';

        heroRotationValue.textContent =
            heroRotation.value + '°';
    }


    heroX.addEventListener(
        'input',
        updateHeroPreview
    );

    heroY.addEventListener(
        'input',
        updateHeroPreview
    );

    heroRotation.addEventListener(
        'input',
        updateHeroPreview
    );


    /*
    |--------------------------------------------------------------------------
    | HERO IMAGE UPLOAD PREVIEW
    |--------------------------------------------------------------------------
    */

    heroInput.addEventListener(
        'change',
        function () {

            const file = this.files[0];

            if (!file) {
                return;
            }


            const imageURL =
                URL.createObjectURL(file);


            let image =
                document.getElementById('heroPreview');


            const placeholder =
                document.getElementById('heroPlaceholder');


            if (!image) {

                image =
                    document.createElement('img');

                image.id = 'heroPreview';

                image.alt = 'Hero Photo';

                heroContainer.innerHTML = '';

                heroContainer.appendChild(image);

            }


            image.src = imageURL;

            image.style.display = 'block';

            updateHeroPreview();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | ABOUT
    |--------------------------------------------------------------------------
    */

    const aboutInput =
        document.getElementById('about_image');

    const aboutContainer =
        document.getElementById(
            'aboutPreviewContainer'
        );

    const aboutX =
        document.getElementById(
            'about_position_x'
        );

    const aboutY =
        document.getElementById(
            'about_position_y'
        );

    const aboutRotation =
        document.getElementById(
            'about_rotation'
        );


    const aboutXValue =
        document.getElementById(
            'aboutXValue'
        );

    const aboutYValue =
        document.getElementById(
            'aboutYValue'
        );

    const aboutRotationValue =
        document.getElementById(
            'aboutRotationValue'
        );


    function updateAboutPreview() {

        aboutContainer.style.setProperty(
            '--position-x',
            aboutX.value + '%'
        );

        aboutContainer.style.setProperty(
            '--position-y',
            aboutY.value + '%'
        );

        aboutContainer.style.setProperty(
            '--rotation',
            aboutRotation.value + 'deg'
        );


        aboutXValue.textContent =
            aboutX.value + '%';

        aboutYValue.textContent =
            aboutY.value + '%';

        aboutRotationValue.textContent =
            aboutRotation.value + '°';
    }


    aboutX.addEventListener(
        'input',
        updateAboutPreview
    );

    aboutY.addEventListener(
        'input',
        updateAboutPreview
    );

    aboutRotation.addEventListener(
        'input',
        updateAboutPreview
    );


    /*
    |--------------------------------------------------------------------------
    | ABOUT IMAGE UPLOAD PREVIEW
    |--------------------------------------------------------------------------
    */

    aboutInput.addEventListener(
        'change',
        function () {

            const file = this.files[0];

            if (!file) {
                return;
            }


            const imageURL =
                URL.createObjectURL(file);


            let image =
                document.getElementById(
                    'aboutPreview'
                );


            if (!image) {

                image =
                    document.createElement('img');

                image.id = 'aboutPreview';

                image.alt = 'About Photo';

                aboutContainer.innerHTML = '';

                aboutContainer.appendChild(image);

            }


            image.src = imageURL;

            image.style.display = 'block';

            updateAboutPreview();

        }
    );


    /*
    |--------------------------------------------------------------------------
    | INITIAL PREVIEW
    |--------------------------------------------------------------------------
    */

    updateHeroPreview();
    updateAboutPreview();

});

</script>

@endpush