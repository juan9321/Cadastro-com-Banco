<?php
//timezone
date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados
define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','projweb');
    
class banco{

    protected $mysqli;
    private $cadastro;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }
    /*$email,
    $senha,
    $endereco,
    $bairro,
    $cep, 
    $cidade, 
    $estado*/

    public function setAgendamentos($email,$senha,$endereco,$bairro,$cep, $cidade, $estado){
        $stmt = $this->mysqli->prepare("INSERT INTO agendamentos (`email`, `senha`, `endereco`, `bairro`, `cep`, `cidade`, `estado` ) VALUES (?,?,?,?,?,?,?);");
        $stmt->bind_param("sssssss",$email,$senha,$endereco,$bairro,$cep, $cidade, $estado);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }
    }

    public function getAgendamentos(){
        try{
            $stmt = $this->mysqli->query("SELECT * FROM agendamentos;");
            $lista = $stmt->fetch_all(MYSQLI_ASSOC);
            $f_lista = array();
            $i = 0;
            foreach ($lista as $l){
                $f_lista[$i]['id'] = $l['id'];
                $f_lista[$i]['email'] = $l['email'];
                $f_lista[$i]['endereco'] = $l['endereco'];
                $f_lista[$i]['cep'] = $l['cep'];
                $f_lista[$i]['cidade'] = $l['cidade'];
                $i++;
            }
            return $f_lista;
        } catch(Exception $e) {
            echo "Ocorreu um erro ao tentar Buscar Todos." .$e;
        }
    }

    public function updateAgendamentos ($id,$email,$senha,$endereco,$bairro,$cep,$cidade,$estado){
        $stmt = $this->mysqli->query("UPDATE agendamentos SET `email` = '" . $email . "', `endereco` = '". $endereco ."', `cep` = '". $cep ."', `cidade` = '" . $cidade . "' WHERE `agendamentos`.`id` = " . $id . ";");
    
    
        if ( $stmt > 0){ 
            return true;
        }else{
            return false;
        }

    }

}    
?>