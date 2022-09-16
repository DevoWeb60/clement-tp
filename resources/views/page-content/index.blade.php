<x-layoutAdmin title="Pages">
    <div id="index-content-page">
        <div class="title">
            <h2>Contenu des pages</h2>
        </div>
        <div class="container galery">
            <x-sectionPageList pageName="home" title="Accueil">
                <li>
                    <a class="btn"
                        href="{{ route('pages.create', ['section' => 'home-about', 'page' => 'home']) }}">home-about</a>
                </li>
                <li>
                    <a class="btn"
                        href="{{ route('pages.create', ['section' => 'home-presentation', 'page' => 'home']) }}">home-presentation</a>
                </li>
            </x-sectionPageList>
            <x-sectionPageList pageName="about" title="A propos">
                <li>
                    <a class="btn"
                        href="{{ route('pages.create', ['section' => 'about-content', 'page' => 'about']) }}">about-content</a>
                </li>
            </x-sectionPageList>
            <x-sectionPageList pageName="projects" title="Nos Projets">
                <li>
                    <a class="btn"
                        href="{{ route('pages.create', ['section' => 'projects-galery', 'page' => 'projects']) }}">projects-galery</a>
                </li>
            </x-sectionPageList>
        </div>
    </div>
</x-layoutAdmin>
