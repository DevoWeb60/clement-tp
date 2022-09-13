<x-layoutAdmin title="Objet de contact">
    <div id="index-contact-object">
        <div class="title">
            <h2>Objet de contact</h2>
        </div>
        <div class="container">
            <x-contactObjectList />
            <x-contactObjectForm :object="$objet" />
        </div>
    </div>
</x-layoutAdmin>
