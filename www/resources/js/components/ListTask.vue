<template>
    <div class="container">
         <vue-confirm-dialog></vue-confirm-dialog>

        <input v-model="nameTask" v-on:keyup="validateEmailAddress" class="inputx" type="text" placeholder="New task">
         <div class="card"  v-for="task in tasks">

            <div   class="columns list"  >
                <div  v-on:click="task.done = ! task.done" class="column is-three-quarters" v-bind:class="{ rasura: task.done }">
                <span> {{ task.name }} - time: {{ task.pomodoro }}</span>
                </div>
                <div  class="column">
                    <button class="btx " v-on:click="task.pomodoro = task.pomodoro + 1" >
                        <i class="fas fa-clock azul"></i>
                    </button>

                    <button class="btx" v-on:click="confirmAlert(task)" >
                        <i class="fas fa-times vermelho"></i>
                    </button>
                </div>
            </div>
         </div>
        
        
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                tasks: [
                    {"name":"task 1", "done":false, "pomodoro": 0},
                    {"name":"task 2", "done":false, "pomodoro": 0},
                ],
                nameTask : ""
                
            }
        },
        mounted() {
           
        },
        methods: {
           validateEmailAddress: function(e) {
                if (e.keyCode === 13) {
                    this.addTask()
                } else if (e.keyCode === 50) {
                    alert('@ was pressed');
                }      

                this.log += e.key;
            },
            addTask: function(){
                if(this.nameTask != ""){
                    let task =  {"name": this.nameTask, "done":false, "pomodoro": 0}
                    this.nameTask = "";
                    this.tasks.push(task)
                }
            },
            deleteItem(index) {
                this.tasks.splice(index, 1)
            },
            confirmAlert(index){
                let local = this;
                this.$confirm(
                    {
                    message: `Quer mesmo excluir a tarefa ?`,
                    button: {
                        no: 'Não',
                        yes: 'Sim, eu quero'
                    },
                    /**
                     * Callback Function
                     * @param {Boolean} confirm 
                     */
                    callback: confirm => {
                        if (confirm) {
                          local.deleteItem(index)
                        }
                    }
                    }
                )
            }
  
            
        }
    }
</script>
<style scoped>

   
 
    .list{
        margin: 15px;
    }

    span {
            color: #717889;
            font-size: 15px;
        }
    .container{
        margin: 20px;
    }
    .rasura {
        text-decoration: line-through;
    }

    .card{
        border-radius: 11px;
        border-radius: 11px;
        background: #1b1c27;
        box-shadow: inset 5px 5px 8px #14151d, 
                    inset -5px -5px 8px #222331;
    }

    .btx{
        border: none;
        margin-left: 3px;
        margin-right: 3px;
        width: 25px;
        height: 25px;
        border-radius: 11px;
        border-radius: 11px;
        background: #1b1c27;
        box-shadow:  4px 4px 15px #0f0f15, 
                    -4px -4px 15px #272939;
    }

    .vermelho{
        color: #c73431;
    }

      .azul{
        color: #7acfe1;
    }

    .inputx{
        border: none;
        width: 100%;
        height: 50px;
        border-radius: 11px;
        background: #1b1c27;
        box-shadow: inset 5px 5px 8px #14151d, 
                    inset -5px -5px 8px #222331;
        
        padding-left: 20px;
        color:blanchedalmond;
        font-size: 20px;
        margin-bottom: 30px;
    }

    .inputx:active,
    .inputx:any-link,
    .inputx:checked,
    .inputx:focus
    {
        outline: none;

    }
</style>
