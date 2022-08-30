<x-layoutApp title="Recrutement">
    <div class="container">
        <div class="title">
            <h2>Recrutements</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque pariatur dolorum voluptatem ipsam.
                Inventore
                possimus, blanditiis, doloribus excepturi esse laudantium ipsa architecto veritatis id libero quas
                accusamus
                eos
                voluptas sapiente!
            </p>
        </div>
        <div class="offers">
            <h2>Postes à pourvoir</h2>
            <ul>
                <li>
                    <a href="{{ route('offer') }}">
                        <h3>Poste 1</h3>
                        <span class="muted">
                            La Roue Qui Tourne
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('offer') }}">
                        <h3>Poste 2</h3>
                        <span class="muted">
                            Beauvais
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-layoutApp>
