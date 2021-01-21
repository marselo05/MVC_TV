<?php

	// Retorna la url proyecto
	function base_url()
	{
		return BASE_URL;
	}

	function dep($data) {
		$format = print_r('<pre>');
		$format .= print_r($data);
		$format .= print_r('</pre>');
		return $format;
	}

	function strClean ($strCadena) {
		$string = preg_replace(['/\s+/','/^\s|\s$/'], $strCadena);
		$string = trim($string); // Elimian espacios en blanco incio fin.
		$string = stripcslashes($string); // Elimina las \ invertidas.
		$string = str_ireplace("<script>", "", $string);
		$string = str_ireplace("</script>", "", $string);
		$string = str_ireplace("<script src>", "", $string);
		$string = str_ireplace("<script type=>", "", $string);
		$string = str_ireplace("SELECT * FROM", "", $string);
		$string = str_ireplace("DELETE FROM", "", $string);
		$string = str_ireplace("INSERT INTO", "", $string);
		$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
		$string = str_ireplace("DROP TABLE", "", $string);
		$string = str_ireplace("OR '1'='1'", "", $string);
		$string = str_ireplace('OR "1"="1"', "", $string);
		$string = str_ireplace("OR ´1´=´1´", "", $string);
		$string = str_ireplace("is NULL; --", "", $string);
		$string = str_ireplace("LIKE '", "", $string);
		$string = str_ireplace('LIKE "', "", $string);
		$string = str_ireplace("LIKE ´", "", $string);
		$string = str_ireplace("OR 'a'='a'", "", $string);
		$string = str_ireplace('OR "a"="a"', "", $string);
		$string = str_ireplace("OR ´a´=´a´", "", $string);
		$string = str_ireplace("--", "", $string);
		$string = str_ireplace("^", "", $string);
		$string = str_ireplace("[", "", $string);
		$string = str_ireplace("]", "", $string);
		$string = str_ireplace("==", "", $string);
		return $string;
	}

	function passGenerator($length = 10)
	{
		$pass 			= "";
		$longitudPass 	= $length;
		$cadena 	= "ABCDEFGHIJKLMNOPQRSTUVWYZabcdefghijklmnopqrstuvwyz1234567890";
		$longitudCadena = strlen($cadena);

		for ($i=1; $i<= $longitudPass; $i++) { 
		 	$pos   = rand(0, $longitudCadena-1);
		 	$pass .= substr($cadena, $pos, 1);
		 } 
		 return $pass;
	}

	function token() {
		$r1 = bin2hex(random_bytes(10));
		$r2 = bin2hex(random_bytes(10));
		$r3 = bin2hex(random_bytes(10));
		$r4 = bin2hex(random_bytes(10));
		$token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
		return $token;
	}

	function formaMoney($cantidad) {
		$cantidad = number_format($cantidad, 2,SPD, SPM);
		return $cantidad;
	}