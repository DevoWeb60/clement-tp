<div id="services-process">
    <div class="container">
        <h2>Le processus</h2>
        <p class="text">
            Travaillant au sein du modèle «Design & Build», Clément TP coordonne la gestion de tous les professionnels
            et participants au projet, sous l’égide d’une seule équipe. Cela inclut les architectes, les ingénieurs, les
            spécialistes, les constructeurs et le client. Cela garantit que les phases du projet se déroulent
            harmonieusement grâce à une communication et une organisation efficaces.
        </p>
        <ul>
            @foreach ($processList as $process)
                <li>
                    <x-textBox :title="$process->name">{{ $process->description }}</x-textBox>
                </li>
            @endforeach
        </ul>
    </div>
</div>
