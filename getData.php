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

                <path d="M42,130 C 50 120, 60 140, 80 120 S 110 140, 130 120 L122, 150 45, 150z" stroke="#C8F4F9"
                    fill="#C8F4F9" stroke-width="3" stroke-linecap="round">
                    <animate repeatCount="indefinite" fill="#C8F4F9" attributeName="d" dur="3s" attributeType="XML"
                        values="
                        M42,110 C 50 130, 60 110, 80 130 S 110 120, 130 110 L122, 150 45, 150z;
                        M42,130 C 50 120, 60 140, 80 120 S 110 140, 130 120 L122, 150 45, 150z;
                        M42,120 C 50 130, 60 110, 80 120 S 110 120, 130 120 L122, 150 45, 150z;
                        M42,110 C 50 120, 60 140, 80 120 S 110 140, 130 120 L122, 150 45, 150z;
                        M42,110 C 50 130, 60 110, 80 130 S 110 120, 130 110 L122, 150 45, 150z;

                    
                    " />
                </path>

                <polygon points="20,5 150,5 125,150 45,150 " fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>
    <!-- <div class="container">
        <p>2단계</p>
        <div id="two">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <path d="M38,110 C 50 100, 60 130, 70 110 S 85 130, 95 110, 110 130, 132 110 L125, 150 45, 150z"
                    stroke="#eb6e4c" fill="#eb6e4c" stroke-width="3" stroke-linecap="round">
                    <animate repeatCount="indefinite" fill="#d65e66" attributeName="d" dur="4s" attributeType="XML"
                        values="

                    
                    " />
                </path>
                <polygon points="20,5 150,5 125,150 45,150z " fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div> -->
    <div class="container">
        <p>2단계</p>
        <div id="three">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <path d="M38,110 C 50 100, 65 80, 80 100 S 95 80, 110 100, 130 80, 133 100 L125, 150 45, 150z"
                    stroke="#47D3CE" fill="#47D3CE" stroke-width="3" stroke-linecap="round">
                    <animate repeatCount="indefinite" fill="#47D3CE" attributeName="d" dur="4s" attributeType="XML"
                        values="
                    M38,100 C 50 110, 65 100, 80 80 S 95 100, 110 110, 130 100, 133 100 L125, 150 45, 150z;
                    M38,110 C 50 100, 65 80, 80 100 S 95 80, 110 100, 130 80, 133 100 L125, 150 45, 150z;
                    M38,100 C 50 110, 65 100, 80 80 S 95 100, 110 110, 130 100, 133 100 L125, 150 45, 150z;

                    
                    " />
                </path>

                <polygon points="20,5 150,5 125,150 45,150" fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>
    <div class="container">
        <p>3단계</p>
        <div id="four">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <path d="M38,90 C 50 80, 65 50, 80 80 S 95 80, 110 50, 130 80, 142 50 L125, 150 45, 150z"
                    stroke="#FCA4A2" fill="#FCA4A2" stroke-width="3" stroke-linecap="round">
                    <animate repeatCount="indefinite" fill="#FCA4A2" attributeName="d" dur="4s" attributeType="XML"
                        values="

                    
                    " />
                </path>
                <polygon points="20,5 150,5 125,150 45,150" fill="none" stroke="#000" stroke-width="3" />
            </svg>
        </div>
    </div>
    <div class="container">
        <p>4단계</p>
        <div id="five">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="200"
                height="200">
                <path d="M24,30 C 50 20, 65 10, 80 20 S 95 10, 110 20, 130 30, 147 10 L125, 150 45, 150z" 
                    stroke="#E78484" fill="#E78484" stroke-width="3" stroke-linecap="round">
                    <animate repeatCount="indefinite" fill="#E78484" attributeName="d" dur="4s" attributeType="XML"
                        values="

                    
                    " />
                </path>

                <!-- 물튀기기 -->
                <path d="M155 10 C 160 5, 170 25, 165,30z" fill="#E78484"></path>
                <path d="M155 5 C 163 0, 170 15, 165,10z" fill="#E78484"></path>

                <polygon points="20,5 45,150, 125,150 150,5" fill="none" stroke="#000" stroke-width="3" />

            </svg>
        </div>
    </div>



</body>

</html>