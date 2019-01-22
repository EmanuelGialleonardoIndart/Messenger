<template>
    <b-img rounded="circle" blank width="12" height="12" :title="online ? 'Conectado' : 'Desconectado'" :blank-color="online ? 'green':'gray'" alt="img" class="m-1" />
</template>
<script>
   export default {
        props:{
              online:Boolean
        },
        data(){
           return{
           }
        },
        mounted() {
        }
    }
</script>
