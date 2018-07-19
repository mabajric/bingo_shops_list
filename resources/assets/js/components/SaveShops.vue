<template>
    <div class="text-center">
        <button @click="saveShopsToBackend" class="btn btn-primary my-2">Save shops</button>
    </div>
</template>

<script>
    export default {
        name: 'SaveShops',
        props: {
            listOfShops: Array
        },
        methods: {
            saveShopsToBackend: function () {
                const listOfShops = this.listOfShops.map((shopObject) => (
                    {
                        name: shopObject.name,
                        address: 'test',
                        distance: 5,
                        latitude: shopObject.geometry.location.lat(),
                        longitude: shopObject.geometry.location.lng()
                    }
                ));
                console.log(listOfShops);
                $.post('/api/save-shops', {
                    listOfShops
                }, (data, textStatus) => {
                    console.log(data, textStatus);
                });
            }
        }
    };
</script>

<style scoped>

</style>