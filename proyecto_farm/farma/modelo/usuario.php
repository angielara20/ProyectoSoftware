<?PHP
include_once 'conexion.php';
class usuario{
    var $objetos;
    public function __construct(){
        $db = new  conexion();
        $this->acceso = $db->pdo;
    }
    function loguearse($dni,$pass){
$sql="select * from usuario inner join tipo_us on us_tipo=id_tipo_us where dni_us=:dni and contrasena_us=:pass";
$query = $this->acceso->prepare($sql);
$query->execute(array(':dni'=>$dni,':pass'=>$pass));
$this->objetos=$query->fetchall();
return $this->objetos;
    }

function obtener_datos($id){
 $sql="select * from usuario join tipo_us on us_tipo=id_tipo_us and id_usuario=:id";
 $query = $this->acceso->prepare($sql);
 $query->execute(array(':id'=>$id));
 $this->objetos=$query->fetchall();
 return $this->objetos;
} 

function editar($id_usuario,$telefono,$residencia,$correo,$sexo,$adicional){
    $sql="update usuario set telefono_us=:telefono, residencia_us=:residencia, correo_us=:correo, sexo_us=:sexo, adicional_us=:adicional where id_usuario=:id";
    $query = $this->acceso->prepare($sql);

$query->execute(array(':id'=>$id_usuario,':telefono'=>$telefono,':residencia'=>$residencia,':correo'=>$correo,':sexo'=>$sexo, ':adicional'=>$adicional));


}



}

?>  