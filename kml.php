<?php


/*COOASOATLAN*/

$COOASOATLAN=array("C1-4132.kmz",
"C20-4181.kmz",);

/*COOCHOFAL*/

$COOCHOFAL=array("A15-4159.kmz",
"C18- 4141.kmz",
"C2-4133.kmz",
"C4-4135.kmz",
"C9-4140.kmz",
"D20-4185.kmz",);

/*COOLITORAL*/

$COOLITORAL=array("A1-4106.kmz",
"A2-4107.kmz",
"A3-4108.kmz",
"A4-4109.kmz",
"B1-4117.kmz",
"B17-4163.kmz",
"B2A-4177.kmz",
"B3-4119.kmz",
"C19-4178.kmz",
"PT1-4101.kmz",
"PT2-4102.kmz",
"PT3-4103.kmz",
"PT4-4104.kmz",
"PT5-4105.kmz",);

/*COOTRAB*/

$COOTRAB=array("C5-4136.kmz",
"C6-4137.kmz",);

/*COOTRANSCO*/

$COOTRANSCO=array("C7-4138.kmz");

/*COOTRANSNORTE*/

$COOTRANSNORTE=array("A5-4110.kmz",
"A6-4111.kmz",);

/*COOTRANSPORCAR*/

$COOTRANSPORCAR=array("C8-4139.kmz");

/*COOTRANTICO*/

$COOTRANTICO=array("A18-4183.kmz",
"B20-4180.kmz",
"B4-4120.kmz",
"B5-4121.kmz",
"B6-4122.kmz",
"B7-4123.kmz",);

/*COOTRASOL*/

$COOTRASOL=array("D3-4147.kmz",
"D4-4148.kmz",
"D5-4149.kmz",);

/*COOTRATLANTICO*/

$COOTRATLANTICO=array("C10-4142.kmz",
"C15-4144.kmz",);

/*EMBUSA*/

$EMBUSA=array("B9-4125.kmz");

/*FLOTA-ANGULO*/

$FLOTA_ANGULO=array("A7-4112.kmz",);

/*FLOTA-ROJA*/

$FLOTA_ROJA=array("A8-4113.kmz",);

/*LA-CAROLINA*/

$LA_CAROLINA=array("A16-4161.kmz",
"D6-4150.kmz",
"D7-4151.kmz",);

/*LOLAYA*/

$LOLAYA=array("B10-4126.kmz",
"D8-4165.kmz",);

/*MONTERREY*/

$MONTERREY=array("B11-4166.kmz",
"B12-4127.kmz",
"B8-4124.kmz",);


/*SOBUSA*/

$SOBUSA=array("B18-4175.kmz",
"C11-4168.kmz",
"C12-4169.kmz",
"C13-4143.kmz",
"C14-4170.kmz",
"C16-4167.kmz",);

/*SODETRANS*/

$SODETRANS=array("B13-4128.kmz",
"B14-4174.kmz",
"B15-4129.kmz",
"C21-4182.kmz",);

/*TRANSDIAZ*/

$TRANSDIAZ=array("A10-4114.kmz",
"A11-4115.kmz",
"B16-4130.kmz",);

/*TRANSMECAR*/

$TRANSMECAR=array("C17-4160.kmz",
"D10-4172.kmz",
"D11-4153.kmz",
"D9-4152.kmz",);

/*TRANSOLEDAD*/

$TRANSOLEDAD=array("D13-4155.kmz",);

/*TRANSURBAR*/

$TRANSURBAR=array("A14-4116.kmz",
"D16-4173.kmz",
"D19-4184.kmz",);

/*TRASALFA*/

$TRASALFA=array("B2B-4118.kmz",
"D14-4156.kmz",
"D15-4157.kmz",);

/*TRASALIANCO*/

$TRASALIANCO=array("B19-4176.kmz",
"D12-4154.kmz",
"D17-4158.kmz",
"D18-4179.kmz",);

/*T_ATLANTICO*/
$T_ATLANTICO=array("A13-4162.kmz",);

descargar_kmz("COOASOATLAN",$COOASOATLAN);
descargar_kmz("COOCHOFAL",$COOCHOFAL);
descargar_kmz("COOLITORAL",$COOLITORAL);
descargar_kmz("COOTRAB",$COOTRAB);
descargar_kmz("COOTRANSCO",$COOTRANSCO);
descargar_kmz("COOTRANSNORTE",$COOTRANSNORTE);
descargar_kmz("COOTRANSPORCAR",$COOTRANSPORCAR);
descargar_kmz("COOTRANTICO",$COOTRANTICO);
descargar_kmz("COOTRASOL",$COOTRASOL);
descargar_kmz("COOTRATLANTICO",$COOTRATLANTICO);
descargar_kmz("EMBUSA",$EMBUSA);
descargar_kmz("FLOTA_ANGULO",$FLOTA_ANGULO);
descargar_kmz("FLOTA_ROJA",$FLOTA_ROJA);
descargar_kmz("LA_CAROLINA",$LA_CAROLINA);
descargar_kmz("LOLAYA",$LOLAYA);
descargar_kmz("MONTERREY",$MONTERREY);
descargar_kmz("SOBUSA",$SOBUSA);
descargar_kmz("SODETRANS",$SODETRANS);
descargar_kmz("TRANSDIAZ",$TRANSDIAZ);
descargar_kmz("TRANSMECAR",$TRANSMECAR);
descargar_kmz("TRANSOLEDAD",$TRANSOLEDAD);
descargar_kmz("TRANSURBAR",$TRANSURBAR);
descargar_kmz("TRASALFA",$TRASALFA);
descargar_kmz("TRASALIANCO",$TRASALIANCO);



function descargar_kmz($nombre,$ruta){
$url="http://www.ambq.gov.co/rutas-de-buses";

    foreach ($ruta as $value) {
        
        $url_origen=$url."/".$nombre."/".$value;
        $archivo_destino=$nombre."/".$value;
        mkdir($nombre, 0777);
        chmod($nombre, 0777);
        $ch = curl_init ();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$fs_archivo = fopen ($archivo_destino, "wb"); 
		curl_setopt ($ch, CURLOPT_FILE, $fs_archivo); 
		curl_setopt ($ch, CURLOPT_HEADER, 0); 
		curl_setopt ($ch, CURLOPT_URL, $url_origen);
		curl_exec ($ch); 
		curl_close ($ch); 
		fclose ($fs_archivo); 
		chmod($archivo_destino, 0777); 
		$name_tmp=explode(".",$value);
		mkdir($nombre."/".$name_tmp[0]."_kml", 0777);
		//descomprimir($nombre."/".$name_tmp.".kmz", $nombre."/".$name_tmp[0]."_kml");
    }

    
}

function descomprimir($origen, $destino) {
  $string = implode("", gzfile($origen));
  $fp = fopen($destino, "w");
  fwrite($fp, $string, strlen($string));
  fclose($fp);
}
