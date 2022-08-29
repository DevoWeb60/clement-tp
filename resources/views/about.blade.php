@extends('layouts.app')

@section('content')
    <x-titleOnBackground title="A propos" image="{{ asset('storage/webp/about-worker.webp') }}">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit repudiandae alias molestiae dolor, aspernatur
        molestias quos quam nemo amet saepe rerum. Quos dolorem, nam eveniet illo obcaecati amet suscipit saepe!
        Tempora odio ducimus perferendis dolorem, rem repellat distinctio, deleniti facilis pariatur eligendi, reiciendis
        quos earum error dolore dolor atque recusandae nam aperiam! Neque libero consequuntur possimus corrupti facere
        repellat accusamus.
        Quia, fugit illum eum laborum animi odit eaque et officia modi. Atque dolorem corporis saepe cum illo optio
        voluptates repudiandae ut, nemo distinctio officiis ipsa error eius aperiam in sunt!
    </x-titleOnBackground>
    <div class="container">
        <div class="about-content">
            <h2>Notre histoire</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, dolorem officia natus magni incidunt dicta.
                Minima doloribus sed ratione dolorum, iusto sit, quidem est nihil quas quasi voluptate impedit
                voluptas.Eius, harum sit eos, ad ducimus error dolorum libero at cupiditate pariatur nesciunt nobis cum
                velit dolor molestias! Quia ratione ad necessitatibus officia voluptas doloribus architecto a cum ex earum.
            </p>
        </div>
        <div class="about-content">
            <h2>Notre philosophie</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, dolorem officia natus magni incidunt
                dicta. Minima doloribus sed ratione dolorum, iusto sit, quidem est nihil quas quasi voluptate impedit
                voluptas.Eius, harum sit eos, ad ducimus error dolorum libero at cupiditate pariatur nesciunt nobis cum
                velit dolor molestias! Quia ratione ad necessitatibus officia voluptas doloribus architecto a cum ex
                earum.</p>
        </div>
        <div class="about-content">
            <h2>Notre expertise</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, dolorem officia natus magni incidunt
                dicta. Minima doloribus sed ratione dolorum, iusto sit, quidem est nihil quas quasi voluptate
                impedit voluptas.Eius, harum sit eos, ad ducimus error dolorum libero at cupiditate pariatur
                nesciunt nobis cum velit dolor molestias! Quia ratione ad necessitatibus officia voluptas doloribus
                architecto a cum ex earum.</p>
        </div>
    </div>
    <x-callToContact />
@endsection
