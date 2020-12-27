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
        $request = $this->pdo->prepare("SELECT reservations.debut, reservations.titre, reservations.id, utilisateurs.login  FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id");         
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
       
        return $result;

    }

    public function insert_event($titre, $description, $debut, $fin, $id_utilisateur)
    {
        // $request = $this->pdo->prepare("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES ( ?, ?, ?, ?, ?)"); 
        $request = $this->pdo->prepare("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES (?, ?, ?, ?, ?)");
        $request->execute([$titre, $description, $debut, $fin, $id_utilisateur]);
    }

    public function show_reservation($myId)
    {
        // $request = $this->pdo->prepare("SELECT login, titre, description, debut, fin FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id WHERE reservations.id =$myId");  
        $request = $this->pdo->prepare("SELECT login, titre, description, DATE_FORMAT(debut, '%d/%m/%Y at %Hh') AS debut, DATE_FORMAT(fin, '%d/%m/%Y at %Hh') AS fin FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id WHERE reservations.id =$myId");         
       
        $request->execute();
        // $result = $request->fetchAll();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}
  //$reservation = new Reservation(connect());   
?>



