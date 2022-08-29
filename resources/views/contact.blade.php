@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="title">
            <h2>Contact</h2>
            <h3>Demande de devis ou renseignements</h3>
            <h3>Laissez nous un message !</h3>
        </div>
        <x-formContact />
        <ul class="coords">
            <li>
                <img class="svg" src="{{ asset('storage/svg/map.svg') }}" alt="La Roue Qui Tourne BTP">
                <a href="https://goo.gl/maps/1vZFREht4R8dacRp8" target="_blank">La Roue Qui
                    Tourne</a>
            </li>
            <li>
                <img class="svg" src="{{ asset('storage/svg/phone.svg') }}"
                    alt="Clément TP Construction rénovation extentions">
                <a href="tel:+33666273399">06 66 27 33 99</a>
            </li>
            <li>
                <img class="svg" src="{{ asset('storage/svg/mail.svg') }}"
                    alt="Architecture plan permis de construire 3D bâtiments">
                <a href="mailto:contact@clement-tp.fr">contact@clement-tp.fr</a>
            </li>
        </ul>
    </div>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.0750510170515!2d2.634757415864033!3d49.25602338057997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e63229bad57551%3A0xc04ce777d04fcf33!2s9%20Rue%20de%20la%20For%C3%AAt%2C%2060810!5e0!3m2!1sfr!2sfr!4v1643887018373!5m2!1sfr!2sfr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
@endsection
