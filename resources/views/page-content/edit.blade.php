<x-layoutAdmin title="Edition de : {{ $page->title }}">
    <div class="title">
        <h2>Nouvelle section : {{ $sectionName }}</h2>
    </div>
    <div class="container form">
        <x-sectionPageForm :sectionData="$page" :section="$sectionName" :pageName="$pageName"
            action="{{ route('pages.update', $page) }}" method="PUT" />
    </div>
</x-layoutAdmin>
