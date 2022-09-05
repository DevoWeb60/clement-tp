<x-layoutAdmin title="Newsletter">
    <div id="index-newsletters">
        <div class="title">
            <h2>Inscrit aux newsletters</h2>
        </div>
        <div class="container">
            <div class="btn-container">
                <a href="{{ route('newsletters.export') }}" class="btn black">Télécharger (.CSV)</a>
            </div>
            <ul class="newsletters">
                @foreach ($newsletters as $newsletter)
                    <li class="space-between"><span>{{ $newsletter->email }}</span>
                        <x-form class="button" method="DELETE" action="{{ route('newsletters.destroy', $newsletter) }}">
                            <button type="submit" class="btn red">Supprimer</button>
                        </x-form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layoutAdmin>
