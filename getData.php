<?php

    // cpu 정보 가져오기
    function get_server_cpu_usage(){

        $load = sys_getloadavg();
        return $load[0];
    
    }


    // 메모리 사용량
    function get_server_memory_usage(){

        $free = shell_exec('free');
        $free = (string)trim($free);
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        $memory_usage = $mem[2]/$mem[1]*100;
    
        return $memory_usage;
    }

    $cpu = get_server_cpu_usage();
    echo $cpu;

    $memory = get_server_memory_usage();
    echo $memory;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COVID-19</title>
    <link rel="stylesheet" href="./style.css" />
    <!-- svg.js -->
    <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js@3.0/dist/svg.min.js"></script>
</head>

<body>
    <h1>covid-19 test</h1>

    <div class="container">
        <p>1단계</p>
        <div id="one">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <path d=" M38,110 C 50 100, 65 80, 80 100 S 95 80, 110 100, 130 80, 133 100 L125, 150 45, 150z" stroke="#eb6e4c" fill="#eb6e4c" stroke-width="3" stroke-linecap="round"/>
                <polygon points="20,5 150,5 125,150 45,150z " fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>
    <div class="container">
        <p>2단계</p>
        <div id="two">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <polygon points="20,5 150,5 125,150 45,150z " fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>
    <div class="container">
        <p>3단계</p>
        <div id="three">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <polygon points="20,5 150,5 125,150 45,150z " fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>
    <div class="container">
        <p>4단계</p>
        <div id="four">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <polygon points="20,5 150,5 125,150 45,150z " fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>
    <div class="container">
        <p>5단계</p>
        <div id="five">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <polygon points="20,5 150,5 125,150 45,150z " fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>



</body>

</html>