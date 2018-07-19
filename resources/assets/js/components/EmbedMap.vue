<template>
    <div id="embedMap" class="m-auto"></div>
</template>

<script>
    export default {
        name: 'EmbedMap',
        data: function () {
            return {
                myPosition: new google.maps.LatLng(44.5345474, 18.6813046),
                map: null,
                service: null,

            };
        },
        mounted: function () {
            this.map = new google.maps.Map(document.getElementById('embedMap'), {
                center: this.myPosition,
                zoom: 13
            });

            const request = {
                query: 'Bingo',
                fields: ['name', 'formatted_address', 'distance', 'geometry'],
                location: this.myPosition,
                radius: 5000
            };

            this.service = new google.maps.places.PlacesService(this.map);
            this.service.nearbySearch(request, this.mapsServiceCallback);
        },
        methods: {
            mapsServiceCallback: function (results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    results.forEach((place) => {
                        this.createMarker(place.geometry.location);
                    });
                }
            },
            createMarker: function (location) {
                new google.maps.Marker({
                    map: this.map,
                    position: location
                });
            }
        }
    };
</script>

<style scoped>

</style>