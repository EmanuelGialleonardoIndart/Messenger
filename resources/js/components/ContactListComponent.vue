<template>
    <div>
        <b-form class="my-3 mx-3">
            <b-form-input class="text-center" type="text" placeholder="Buscar contacto">
            </b-form-input>
        </b-form> 
        <b-list-group>
            <contact-component v-for="conversation in conversations"
             :key="conversation.id"
             variant="light"
             :conversation="conversation"
             @click.native="selectConversation(conversation)">

            </contact-component>
            <!--
            <contact-component variant="info"></contact-component>
            <contact-component variant="dark"></contact-component>
            <contact-component variant="light"></contact-component>
            -->
        </b-list-group>
    </div>    
</template>
<script>
    export default {
        data(){
           return{
               conversations:[]
           }
        },
        mounted() {
            this.getConversations()
        },
        methods:{
            getConversations(){
                axios.get('/api/conversations')
                .then((response)=>{
                    this.conversations=response.data; 
                });
            },
            selectConversation(conversation){
                this.$emit('conversationSelected',conversation)
            }
        }
    }
</script>