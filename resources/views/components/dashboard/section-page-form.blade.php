<x-form action="{{ $action }}" method="{{ $method }}" enctype="multipart/form-data">
    <input type="hidden" name="section_name" value="{{ $section }}">
    <input type="hidden" name="page_name" value="{{ $pageName }}">
    @if ($inputTitle)
        <x-inputGroup label="Titre" name="title" type="text">
            {{ $sectionData ? $sectionData->title : '' }}
        </x-inputGroup>
    @endif
    @if ($inputContent)
        <x-inputGroup label="Contenu textuel" name="content" type="textarea">
            {{ $sectionData ? $sectionData->content : '' }}
        </x-inputGroup>
    @endif
    @if ($inputImage)
        <x-inputFileGroup label="Image" name="image">
            {{ $sectionData ? $sectionData->image : '' }}
        </x-inputFileGroup>
    @endif
    @if ($inputLink)
        <x-inputRadioGroup mainLabel="Lien vers une page" :options="$menus" name="link">
            {{ $sectionData ? $sectionData->link : '' }}
        </x-inputRadioGroup>
    @endif
    @if ($inputLinkText)
        <x-inputGroup label="Texte du lien" name="link_text" type="text">
            {{ $sectionData ? $sectionData->link_text : '' }}
        </x-inputGroup>
    @endif
    <div class="space-between">
        <a href="{{ route('pages.index') }}" class="btn black">Retour</a>
        <button type="submit" class="btn">Ajouter</button>
    </div>
</x-form>
