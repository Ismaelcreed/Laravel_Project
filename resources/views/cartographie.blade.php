@extends('layouts.base')

@section('content')
@if(true)
    <div id="map"></div>
@else
        <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Vous ête hors ligne!</h2>
                    <h5 class="mt-3">Veuillez vérifier votre connexion!</h5>
                </div>
            </div>
@endif
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&callback=initMap" defer></script>
    <style>
        #map {
            height: 500px;
            width: 600px;
            margin : 0 auto;
        }
    </style>
    <script>
        const lieux = [
                { nom: 'Aigle d\'Or Madagascar', latLng: { lat: -18.8784, lng: 47.5212 } },
                { nom: 'Autre lieu', latLng: { lat: latitude, lng: longitude } },
                
            ];

            function initMap() {
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: { lat: -18.87919, lng: 46.86910 },
                    zoom: 6
                });

                
                lieux.forEach(lieu => {
                    const marker = new google.maps.Marker({
                        position: lieu.latLng,
                        map: map,
                        title: lieu.nom
                    });
                });
            }

    </script>
@endsection