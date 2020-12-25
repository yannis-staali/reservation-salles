<?

class Reservation
{

private $pdo;

    function __construct($db)
    {
        $this->pdo = $db;
    }

    public function get_reservation()
    { 
        //modifier en cas la requete pour select que les elements necessaires
        $request = $this->pdo->prepare("SELECT *  FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id");         
        $request->execute();
        $result = $request->fetchAll();
       
        return $result;
    
        // else return 'request failed';
    }

    public function insert_event($titre, $description, $debut, $fin, $id_utilisateur)
    {
        // $request = $this->pdo->prepare("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ( ?, ?, ?, ?, ?)"); 
        $request = $this->pdo->prepare("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES (?, ?, ?, ?, ?)");
        $request->execute([$titre, $description, $debut, $fin, $id_utilisateur]);
    }

    public function show_reservation($myId)
    {
        $request = $this->pdo->prepare("SELECT login, titre, description, debut, fin FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id WHERE reservations.id =$myId");         
        $request->execute();
        $result = $request->fetchAll();

        return $result;
    }

}
  //$reservation = new Reservation(connect());   
?>



