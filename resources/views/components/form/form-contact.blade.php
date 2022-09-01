<x-form method="POST" action="{{ route('contact.store') }}" class="form-contact">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <x-inputGroup label="Nom/Entreprise" name="name" type="text" />
    <x-inputGroup label="Adresse mail" name="email" type="email" />
    <x-inputGroup label="Téléphone (facultatif)" name="phone" type="tel" />
    <x-selectGroup label="Votre demande" name="object_id" valueKey="id" :options="$data" :labelKeys="['name']" />
    <x-inputGroup label="Coupon (facultatif)" name="delivery_id" type="text">
        @if (Request::get('coupon'))
            {{ Request::get('coupon') }}
        @endif
    </x-inputGroup>
    <x-inputGroup label="Message" name="message" type="textarea" />
    <button type="submit" class="btn">Envoyer</button>
</x-form>
