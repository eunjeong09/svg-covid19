
<?php
 header('Content-type: text/plain');

$ch = curl_init();
$url = 'http://openapi.data.go.kr/openapi/service/rest/Covid19/getCovid19GenAgeCaseInfJson'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=XaqrFujPRw%2FZDEp2c7lGB5oT7sHJgMw%2BsmKYSSfiO1oVMI%2BHx1olooKrDdkOnIJ2rWnlu7Du6iluyJUBlqdwfQ%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('10'); /**/
$queryParams .= '&' . urlencode('startCreateDt') . '=' . urlencode('20200310'); /**/
$queryParams .= '&' . urlencode('endCreateDt') . '=' . urlencode('20200414'); /**/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);

?>