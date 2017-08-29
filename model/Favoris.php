<?


class Favoris{

    private $id;
private $id_annonce;
private $id_inscription;


 
    public function __construct($tableau = array())
    {
         $this->hydrate($tableau);
     }


function setId($id) { $this->id = $id; }
function getId() { return $this->id; }
function setId_annonce($id_annonce) { $this->id_annonce = $id_annonce; }
function getId_annonce() { return $this->id_annonce; }
function setId_inscription($id_inscription) { $this->id_inscription = $id_inscription; }
function getId_inscription() { return $this->id_inscription; }


    public function hydrate($tableau)
     {
         foreach($tableau as $key => $value)
         {
             //ici je rajoute un remplacement des undescore
             //$key = preg_replace("#_#","",$key);
             //donc pour l'index id on met le en majuscule et le
             // prefix avec "set"
             $method = "set".ucfirst($key);
            if(method_exists($this,$method)){
                 $this->$method($value);
             }
         }
     }

}