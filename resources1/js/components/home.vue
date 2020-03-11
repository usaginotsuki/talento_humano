<template>
    <div>
        <header1></header1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    home component is working
                    {{info}}
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import header1 from '../lib/header1';
    export default {
        data() {
            return {
                info: 'info gfdgfdgfd'
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        components: {
            header1
        }
    };
</script>