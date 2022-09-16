<x-layoutAdmin title="Nouvelle section">
    <div class="title">
        <h2>Nouvelle section : {{ $sectionName }}</h2>
    </div>
    <div class="container form">
        <x-sectionPageForm :sectionData="false" :section="$sectionName" :pageName="$pageName" action="{{ route('pages.store') }}"
            method="POST" />
    </div>
</x-layoutAdmin>
