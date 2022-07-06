<?

	PRINT_R('inicio');

	$arrContextOptions=array(
		"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
		),
	);

    $pathTemplate = "https://docdigital.unimedvs.com.br/mvc/controls/dsEnviada.html";
    $template = file_get_contents( $pathTemplate,false, stream_context_create($arrContextOptions));
    $template = str_replace("{{responsavel}}", 'FAGNER TESTES', $template);
    $template = str_replace("{{hash}}", 'TESTE123', $template);
    //$destino = 'daianyfborges@icloud.com';
    $destino = 'michel.feyh@vs.unimed.com.br';
    $assunto = "Declaração de Saúde - Unimed Vale do Sinos";
    $remetente = "michel.natan@outlook.com.br";
    $headers = "MIME-Version: 1.1\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: $remetente"."\n";
    mail($destino, $assunto, $template, $headers);
	
	PRINT_R('<br><br>');
	PRINT_R($destino);
	PRINT_R('<br><br>fim');
	


?>