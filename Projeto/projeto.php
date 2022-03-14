<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body class="antialiased">
    @php 
    $url = 'https://api11.ecompleto.com.br/exams/processTransaction';

$posts = array (
    "apikey" => "{apikey}"
);
$retorno = executeSendOrder($url, $posts);
echo $retorno;
function executeSendOrder($url, $data){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, $url);
    curl_setopt($curl_handle, CURLOPT_POST, count($data));
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, TRUE);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);
    return $response;
}
    @endphp
    </body>
</html>
