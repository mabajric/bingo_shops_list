<template>
    <div class="text-center">
        <button class="btn btn-danger my-3"
                :disabled="!isSavingEnabled"
                @click="saveShopsToBackend">
            Save shops
        </button>
    </div>
</template>

<script>
    export default {
        name: 'SaveShops',
        props: {
            listOfShops: Array,
            isSavingEnabled: Boolean
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