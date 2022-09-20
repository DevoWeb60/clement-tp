<x-layoutApp title="Nos projets">
    <div id="projects">
        <div class="title">
            <h2>Nos projets</h2>
        </div>
        @if ($projects)
            <div class="container">
                <ul class="galery">
                    @foreach ($projects as $project)
                        <li class="project" data-title="{{ $project->title }}">
                            <img src="{{ asset("storage/$project->image") }}" alt="{{ $project->title }}">
                            <p class="hidden text">{{ $project->content }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-overlay">
                <div class="modal">
                    <span class="close">&times;</span>
                    <div class="modal-content">
                        <h2 class="title">Titre</h2>
                        <div class="content">
                            <p class="modal-text text">
                                Texte
                            </p>
                            <img src="#" alt="image modal" class="modal-img">
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <x-callToContact />
</x-layoutApp>
