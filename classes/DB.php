<? 
Class DB {

   protected $pdo;

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
	public function ClearTable(){
	$this->pdo->query("DELETE FROM `feedback`");
	}
	public  function export(){

        $view=$this->pdo->query("SELECT * FROM `feedback`")->fetchAll();
        foreach ($view as $res){
            echo "<tr><td>".$res['name']."</td>";
            echo "<td>".$res['text']."</td>";
            echo "<td>".$res['email']."</td>";
            echo "<td>".$res['ip']."</td>";
            echo "<td>".$res['browser']."</td>";
            echo "<td>".$res['homepage']."</td>";
            echo "<td>".$res['date']."</td></tr>";
        }

	}
}