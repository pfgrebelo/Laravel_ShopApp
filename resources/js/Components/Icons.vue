<template>
    <!-- <svg v-if="name === 'cart'" aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
    </svg> -->
    <font-awesome-icon v-if="name === 'cart'"  icon="fa-solid fa-shopping-cart" />
    <font-awesome-icon v-if="name === 'user-secret'"  icon="fa-solid fa-user-secret" />
    <font-awesome-icon v-if="name === 'angle-right'"  icon="fa-solid fa-angle-right" />
</template>

<script>
import { defineComponent } from "vue";

export default defineComponent({
    props: ['name'],
    
})
</script>