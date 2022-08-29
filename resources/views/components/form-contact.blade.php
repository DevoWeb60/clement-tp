<form method="POST" action="/" class="form-contact">
    @csrf

    <x-inputGroup label="Nom/Entreprise" name="name" type="text" required="true" />
    <x-inputGroup label="Adresse mail" name="email" type="email" required="true" />
    <x-inputGroup label="Téléphone" name="phone" type="tel" required="false" />
    <x-selectGroup label="Votre demande" name="request" valueKey="name" :options="$data" :labelKeys="['name']"
        required="true" />
    <x-inputGroup label="Message" name="message" type="textarea" required="true" />
    <button type="submit" class="btn">Envoyer</button>
</form>
