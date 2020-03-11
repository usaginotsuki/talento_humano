<template>
    <div>
        <header1></header1>
        <router-view></router-view>
    </div>
</template>

<script>
import header1 from './lib/header1';
export default {
    data() {
        return {

        }
    },
    components: {
        header1
    }
}
</script>