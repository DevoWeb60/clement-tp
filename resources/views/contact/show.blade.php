<x-layoutAdmin :title="$message->name">
    <div class="container" id="single-message">
        <div class="single-message">
            <div class="message-header row">
                <h2>{{ $message->name }}</h2>
                <h6 class="muted">Le {{ $message->created_at->format('d/m/Y') }}</h6>
            </div>
            <a href="mailto:{{ $message->email }}" class="email">{{ $message->email }}</a>
            <h4>Objet : {{ $message->object->name }}</h4>
            @if ($message->delivery)
                <h5>Coupon : <strong>{{ $message->delivery->code }}</strong> ({{ $message->delivery->description }})
                </h5>
            @endif
            @if ($message->phone)
                <h5>Téléphone : <a href="tel:{{ $message->phone }}" class="phone">{{ $message->phone }}</a></h5>
            @endif
            <p>{{ $message->message }}</p>
        </div>
        <div class="controls c-3">
            <a href="{{ route('dashboard') }}" class="control">Retour</a>
            <a href="tel:{{ $message->phone }}" class="control blue">Appeler</a>
            <a href="mailto:{{ $message->email }}" class="control grey">Mail</a>
        </div>
    </div>
</x-layoutAdmin>
