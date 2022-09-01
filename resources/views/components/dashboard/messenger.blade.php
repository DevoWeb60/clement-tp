<div class="messenger">
    <div class="header-messenger">
        <h2>Messages reçu</h2>
        <h4><strong>{{ $notView }}</strong> messages non lu</h4>
    </div>
    <ul>
        @foreach ($messages as $message)
            <li
                class="message
            {{ $message->viewed == 0 ? 'not-viewed' : null }}
            {{ $message->delivery_id != null ? 'delivery' : null }}">
                <div class="header-message">
                    <h4>{{ $message->name }}</h4>
                    <small>{{ $message->created_at->format('d/m/Y') }}</small>
                </div>
                <p>
                    {{ substr($message->message, 0, 50) }}...
                </p>
                <div class="controls {{ $message->phone != null ? 'c-4' : 'c-3' }}">
                    <x-form method="DELETE" action="{{ route('message.destroy', ['message' => $message]) }}">
                        <button type="submit" class="control red delete">Supprimer</button>
                    </x-form>
                    @if ($message->phone)
                        <x-callPhoneNumber class="control blue" :phoneNumber="$message->phone" />
                    @endif
                    <x-mailTo class="control grey" :mail="$message->email" />
                    <a class="control" href="{{ route('message.show', ['message' => $message]) }}">
                        Lire
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
