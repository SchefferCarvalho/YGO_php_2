<?php 

function estaLogado(){
	if (isset($_SESSION['autenticado'])) {
		return true;
	} else {
		return false;
	}
}

function verificarAutenticacao($indexPHP){
	if (!isset($_SESSION['autenticado'])) {
		header('Location: '.$indexPHP.'?login=fail');
	}
}

function tipoCarta($id){
	switch ($id) {
		case '1':
			return 'Monstro';
			break;
		
		case '2':
			return 'Mágica';
			break;

		case '3':
			return 'Armadilha';
			break;

		default:
			return 'Não Identificado';
			break;
	}
}

function GetAPI($url){

	$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
    ));

    $dados = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    return json_decode($dados, true);
}

function DeleteAPI($url, $id){

	$url = $url.'/'.$id;

	$curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "DELETE",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache"
        ),
    ));

    $dados = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    return json_decode($dados, true);
}


function PostAPI($url, $dados){

    $payload = json_encode($dados);
    var_dump($url);

     var_dump($payload);


     $ch = curl_init($url);                                                                      
     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

     curl_setopt($ch, CURLOPT_POST, true);                                                                  

     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                                                                                                                               
                                                                                                                          
     $result = curl_exec($ch);

}

?>