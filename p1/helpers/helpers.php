<?php
function br(){
    echo "<br/>" ;
}

function route(string $str){
    header("location: $str");
}

function routeScript(string $str){
    $escape = json_encode($str);

    echo "
        <script>
            window.location = $escape;
        </script>
    ";
}