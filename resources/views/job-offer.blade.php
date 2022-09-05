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
                @foreach ($jobOffers as $offer)
                    <li>
                        <a href="{{ route('offer', ['id' => $offer->id]) }}">
                            <h3>{{ $offer->name }}</h3>
                            <span class="muted">
                                {{ $offer->city }}
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layoutApp>
