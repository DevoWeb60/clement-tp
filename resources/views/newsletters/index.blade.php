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
                        <x-deleteButton route="newsletters.destroy" :element="$newsletter" :isButton="true" class="btn red" />
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layoutAdmin>
