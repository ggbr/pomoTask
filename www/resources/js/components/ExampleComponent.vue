<template>
    <div class="container">
        <div class="columns is-mobile is-centered"> 
            <div class="circle-externo">
                <div class="circle-interno">
                    <span id="time" class="neon verde">
                        {{time}}
                    </span>
                </div>
            </div>
            
        </div>   
        <div class="columns is-mobile is-centered">

            <button class="btnx " v-on:click="timeStatus = 1">
                <i class="fas fa-play verde"></i>
            </button>        

            <button type="button " class="btnx " v-on:click="timeStatus = 0">
                <i class="fas fa-pause vermelho"></i>
            </button>               
            <button class="btnx " v-on:click="restart()">
                <i class="fas fa-undo amarelo"></i>
            </button>               
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                timeRun: 0,
                timeFull: 20 * 60,
                time: "",
                timeStatus: 0
            }
        },
        mounted() {
            this.runTimer();
        },
        methods: {
           
            restart: function(){
                this.timeStatus = 0;
                this.timeRun = this.timeFull;
            },
            runTimer: function(){
                const self = this;          
                this.loopTime = setInterval(function(){
                    if(self.timeStatus == 1){
                        if(self.timeRun == 0){
                            self.timeStatus = 3;
                            self.playSound()
                            self.$notification.show('Timer', {
                                    body: 'Fim do timer!'
                            }, {})

                        }else{
                            if(self.timeRun == 60){
                                self.playSound()
                            }
                            self.timeRun = self.timeRun  - 1
                        }
                    }
                    self.renderTime();
                }, 1000);
            },
            startTimer: function () {
                this.timeStatus = 1;
            },
            stopTimer: function () {
                this.timeStatus = o;
            },
            renderTime: function(){
                
                let minutos  = Math.floor(this.timeRun / 60)
                let segundos = this.timeRun % 60
                this.time = "" + minutos + ":" + segundos;
            },
            playSound: function() {
                var audio = new Audio("/audio/boss.mp3");
                audio.play();
            },
            playSoundNo: function() {
                var audio = new Audio("/audio/no.mp3");
                audio.play();
            }
        }
    }
</script>
<style scoped>

    #time{
        color: #5ce468;
        font-size: 60px;
        display: inline-block;
        vertical-align: middle;
        line-height: normal;
    }

    .verde{
        color: #5ce468;
    }

    .vermelho{
        color: #c73431;
    }

    .amarelo{
        color: #f8913d;
    }
    
    .container{
        background-color: rgb(27, 28, 39) !important;
    }

    button{
        margin: 5px;
    }

    .neon {
    text-align: center;
    text-transform: uppercase;
    font-size: 8em;
    letter-spacing: 0.15em;
}

    .circle-interno {

          text-align: center;
           line-height: 290px;  
        height: 290px;
        width: 290px;
        border-radius: 50%;
background: #1b1c27;
box-shadow: inset 33px 33px 66px #0e0e14, 
            inset -33px -33px 66px #292a3b;
    }

      .circle-externo {
          margin: 20px;
          padding: 20px;
        border-radius: 50%;
        background: #1b1c27;
        box-shadow:  33px 33px 66px #0e0e14, 
                    -33px -33px 66px #292a3b;
    }


.btnx {
    color:blanchedalmond;
    border: none;
    text-align: center;
    line-height: 80px;  
    display: inline-block;
    vertical-align: middle;
    line-height: normal;

        width: 80px;
        height: 80px;
        border-radius: 12px;
    background: linear-gradient(145deg, #1d1e2a, #181923);
    box-shadow:  5px 5px 10px #0b0b10, 
                -5px -5px 10px #2b2d3e;
}



  
</style>
