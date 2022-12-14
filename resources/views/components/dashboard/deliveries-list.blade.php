<ul class="deliveries-list">
    @foreach ($deliveries as $delivery)
        <li class="delivery">
            <div class="content">
                <h3>
                    <span class="name">
                        {{ $delivery->name }}
                    </span>
                    <span class="code">
                        {{ $delivery->code }}
                    </span>
                </h3>
                <div class="description">
                    <p class="muted">{{ $delivery->description }}</p>
                    @if ($delivery->active)
                        <div class="badge">Actif</div>
                    @endif
                </div>
            </div>
            <div class="controls c-2">
                <x-deleteButton route="coupons.destroy" :element="$delivery" :isButton="false" class="control red" />
                <a href="{{ route('coupons.edit', $delivery->id) }}" class="control black">Modifier</a>
            </div>
        </li>
    @endforeach
</ul>
