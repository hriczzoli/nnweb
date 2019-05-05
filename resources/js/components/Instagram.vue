<template>
        <div class="flex-center">
            <div class="content">
                <ul id="instafeed"></ul>
            </div>
        </div>
</template>
    <script>
        export default {
            methods:{
                mounted() {
                    var userFeed = new Instafeed({
                        get: 'user',
                        userId: '5841564157',
                        clientId: 'd24a2484eaa64121bb55c4a7cf89d017',
                        accessToken: '5841564157.1677ed0.c858607209ae403fb7ff504fbc475f75',
                        // resolution: 'standard_resolution',
                        template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}"/></a>',
                        orientation: 'square',
                        resolution: 'thumbnail',
                        target: 'instafeed',
                        sortBy: 'most-recent',
                        limit: 8,
                        links: false
                    });
            
                    userFeed.run();

                    console.log("why is this not on the console?");
                }
            }
        };

        

//old way of getting pictures on NN website

        
    </script>
    <style scoped>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


        /* insta css */
        #rudr_instafeed{
        list-style:none  
        }
        #rudr_instafeed li{
        float:left;
        width:200px;
        height:200px;
        margin:10px
        }
        #rudr_instafeed li img{
        max-width:100%;
        max-height:100%;
        }
    </style>