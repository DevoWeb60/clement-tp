<x-layoutAdmin title="Coupons">
    <div id="index-deliveries">
        <div class="container">
            <div class="left">
                <x-deliveriesList />
            </div>
            <x-deliveryForm :id="$id" />
        </div>
    </div>
</x-layoutAdmin>
