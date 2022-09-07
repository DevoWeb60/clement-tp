<div class="container" id="services-process">
    <h2>Le processus</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius cum qui pariatur veniam culpa consectetur minus
        quod obcaecati eaque ipsum molestias ex, quia asperiores a sint ut reprehenderit, voluptate molestiae.
    </p>
    <ul>
        @foreach ($processList as $process)
            <li>
                <x-textBox :title="$process->name">{{ $process->description }}</x-textBox>
            </li>
        @endforeach
    </ul>
</div>
