<template>
    <b-list-group-item href="#" :variant="variant">
        <b-row class ="p-2">
            <b-col cols="12" md="3" class="text-center">
                <b-img rounded="circle" blank width="48" height="48" blank-color="#777" alt="img" class="m-1" />
            </b-col>
            <b-col cols="6" align-self="center" class="d-none d-md-block">
                <p class="mb-1"> {{name}} </p>
                <p class="text-muted small mb-0"> {{lastMessage}}</p>
            </b-col>
            <b-col cols="3" align-self="center" class="d-none d-md-block">
                <p class="text-muted small mb-0">{{lastTime}}</p>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
    export default {
        props:[
              'variant'
        ],
        data(){
           return{
               name:'juan pedro',
               lastMessage:'tu:hola juan asdasdasdxd',
               lastTime:'1:37 pm',
           }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
