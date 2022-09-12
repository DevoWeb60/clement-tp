<x-layoutApp title="Nos projets">
    <div id="projects">
        <div class="title">
            <h2>Nos projets</h2>
        </div>
        <div class="container">
            <ul class="galery">
                <li class="project" data-title="Projet 1">
                    <img src="{{ asset('storage/webp/professional.webp') }}" alt="">
                    <p class="hidden">Contenu de projet 1</p>
                </li>
                <li class="project" data-title="Projet 2">
                    <img src="{{ asset('storage/webp/survey.webp') }}" alt="">
                    <p class="hidden">Contenu de projet 2</p>
                </li>
            </ul>
        </div>
        <div class="modal-overlay">
            <div class="modal">
                <span class="close">&times;</span>
                <div class="modal-content">
                    <h2 class="title">Titre</h2>
                    <div class="content">
                        <p class="modal-text">
                            Texte
                        </p>
                        <img src="#" alt="image modal" class="modal-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layoutApp>
