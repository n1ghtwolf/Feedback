<? 
Class DB {
	$host = '127.0.0.1';
    $db   = 'Feedback';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);
	
	function ()
	{
		 $sql = "INSERT INTO USERS (userName, password) VALUES ('test', 'testy')";
		$sth = $pdo->query($sql);
	}
}