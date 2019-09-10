<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Hello PHP/BBS!</h1>

        <button id="button">get</button>

        <h1 id="hello"></h1>

        <script type="text/javascript">

            let hello = document.getElementById('hello');


            let button = document.getElementById('button');


            button.onclick = function() {
                let eventSource = new EventSource('php/server.php');

                eventSource.onopen = function() {
                    console.log("Connection to server opened.");
                };

                eventSource.onmessage = function(e) {
                    hello.innerText = JSON.parse(e.data).text;
                    eventSource.close();
                };

                eventSource.onerror = function(e) {
                    console.log("EventSource failed.");
                    eventSource.close();
                };
            }
        </script>
    </body>
</html>