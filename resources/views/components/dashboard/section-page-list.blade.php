<div class="section-page-list">
    <div class="title">
        <h3>{{ $title }}</h3>
    </div>
    <ul class="sections">
        @foreach ($contents as $section)
            <li>
                <div class="header space-between row">
                    <h3>{{ $section->title }}</h3>
                    <span>{{ $section->section_name }}</span>
                </div>
                <div class="controls {{ $section->section_name != 'about-main' ? 'c-2' : null }}">
                    <a href="{{ route('pages.edit', ['page' => $section]) }}" class="control black">Modifier</a>
                    @if ($section->section_name != 'about-main')
                        <x-form action="{{ route('pages.destroy', ['page' => $section]) }}" method="DELETE">
                            <button type="submit" class="control red">Supprimer</button>
                        </x-form>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
    <div class="btn-container">
        <h4>Nouvelle section</h4>
        <ul class="new-section">
            {{ $slot }}
        </ul>
    </div>
</div>
