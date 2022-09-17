<div class="section-page-list">
    <div>
        <div class="title">
            <h3>{{ $title }} <span class="muted">{{ $contents->count() }}</span></h3>
        </div>
        <ul class="sections">
            @foreach ($contents as $section)
                <li>
                    <div class="header space-between row">
                        <h3>{{ $section->title }}</h3>
                        <span>{{ $section->section_name }}</span>
                    </div>
                    <div
                        class="controls {{ !in_array($section->section_name, ['about-main', 'home-about']) ? 'c-2' : null }}">
                        @if (!in_array($section->section_name, ['about-main', 'home-about']))
                            <x-deleteButton route="pages.destroy" :element="$section" :isButton="false"
                                class="control red" />
                        @endif
                        <a href="{{ route('pages.edit', ['page' => $section]) }}" class="control black">Modifier</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="btn-container">
        <h4>Nouvelle section</h4>
        <ul class="new-section">
            {{ $slot }}
        </ul>
    </div>
</div>
