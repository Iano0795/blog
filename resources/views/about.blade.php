<html>
    <head>
        <title>About</title>
        <style>
            h1{
                text-align: center;
            }
            #me{
                float: left;
            }
            #hobby{
                float: right;
            }
            .feedbackContainer{
                display: flex;
                flex-direction: column;
                width: 15%;
                height: auto;
            }
            button{
                width: 50px;
                height: 50px;
                border-radius: 10px;
                margin: 10px 0px 0px 0px;
            }
        </style>
    </head>
    <body>
        <h1>About</h1>
        <span id="me">
            <p>Am Ian, I love learning stuff, mostly cyber stuff</p>
        </span>
        <span id="hobby">
            <p>On the other side i love playing games</p>
        </span></br>
        <div class='feedbackContainer'>
            <textarea rows='5' columns='10'>
                Some feedback would be lovely;)
            </textarea>
            <button>Submit</button>
        </div>
    </body>
</html>