<template>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    home component is working
                    {{info}}
                </div>
                <div class="col-md-4">
                    sadsadadasdadasd
                </div>
                <div class="col-md-4">
                    sdasdfghjkl;o8i7y6t
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                info: 'info gfdgfdgfd'
            }
        },
        mounted() {
            console.log('Component mounted.');
        }
    };
</script>