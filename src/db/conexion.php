//************* script conexion mysql ********** //
function Conectarse()
{
$host='localhost';
$usuariodb='usuariocpanel_usuariodb';
$passwdb='passworddb';
$nombredb='usuariocpanel_nombredb';

if (!($link=mysql_connect($host,$usuariodb,$passwdb)))
{
echo "Error conectando a la base de datos.";
exit();
}
if (!mysql_select_db($nombredb,$link))
{
echo "Error seleccionando la base de datos, verifique que el nombre de usuario utilizado este asociado a la base de datos.";
exit();
}
return $link;
}

$link=Conectarse();
echo "Conexión con la base de datos conseguida.
";
mysql_close($link); //cierra la conexion
//************* script conexión mysql **********//