<? 
Class DB {
	

   public $pdo;
   public function __construct(){
   
  
	$this->pdo = new PDO("mysql:host=localhost;dbname=Feedback;charset=utf8", 'root','', 
	array( 
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false)
		);
   }
	
	function add ($name,$email,$text,$homepage='')
	{
	 $ip =$_SERVER['REMOTE_ADDR'];
	 $browser =$_SERVER['HTTP_USER_AGENT'];

		$this->pdo->query("INSERT INTO `feedback` (`name`, `email`,`homepage`,`text`,`ip`,`browser`) VALUES ('{$name}','{$email}','{$homepage}','{$text}','{$ip}','{$browser}')");
	}
	function ClearTable(){
	$this->pdo->query("DELETE FROM `feedback`");
	}
	function export(){
	$this->pdo->query("SELECT * FROM `feedback`");
	while($this->pdo->fetch()){
	echo "<td>".$rows['name']."</td>";
	}
}}