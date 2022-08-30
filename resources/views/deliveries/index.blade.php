<x-layoutAdmin title="Coupons">
    <ul>
        @foreach ($deliveries as $delivery)
            <li>
                {{ $delivery->name }}
                {{ $delivery->code }}
            </li>
        @endforeach
    </ul>
</x-layoutAdmin>
