<template>
   <b-row>
      <b-col cols="8">
           <b-card  footer-bg-variant="light"
                    footer-border-variant="dark"
                    title="Conversacion activa" class="h-100"
                    no-body>
                <b-card-body class="card-body-scroll">
                    <message-conversation-component v-for='message in messages' :key="message.id" :written-by-me="message.writtenByMe">
                            {{message.content}}
                    </message-conversation-component>
                </b-card-body>
                <div id="messages-container">
                    
                </div>
                <div slot="footer">
                    <b-form class="mb-0" @submit.prevent="postMessage" autocomplete="off">
                        <b-input-group>
                            <b-form-input v-model="newMessage" class="text-center" type="text" placeholder="Ingresa tu nuevo mensaje"></b-form-input>
                            <b-input-group-append>
                                <b-button type="submit" variant="info">Enviar</b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form> 
                </div>
            </b-card>
      </b-col>
      <b-col cols="4">
          <b-img rounded="circle" blank width="48" height="48" blank-color="#777" alt="img" class="m-1" />
          <p>{{contactName}}</p>
          <hr>
          <b-form-checkbox>
              Desactivar notificaciones
          </b-form-checkbox>
      </b-col>
   </b-row>
</template>

<style>
   .card-body-scroll{
       max-height: calc(100vh-63px);
       overflow-y:auto;
   }
</style>

<script>
    export default {
        props:{
               contactId:Number,
               contactName:String,
               messages:Array
           },
        data(){
           return{
               newMessage:''
           }
        },
        mounted() {
        },
        updated(){
            this.scrollToBottom();  
        },
        methods:{
            
            postMessage(){
                const params={
                    to_id:this.contactId,
                    content:this.newMessage
                }
                axios.post('api/messages', params).then((response)=>{
                    if(response.data.success){
                         this.newMessage='';
                         const message=response.data.message;
                         message.writtenByMe=true;
                         this.$emit('messageCreated',message);
                    }
                
                });
            },
            scrollToBottom(){
                const el= document.querySelector(".card-body-scroll");
                el.scrollTop=el.scrollHeight;
            }
        },
        
    }
</script>
