<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once("$root/ProjWeb-3/model/cadastro.php");

class ControllerCadastro{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        if(isset($_GET['funcao']) && $_GET['funcao'] == "cadastro"){
            $this->incluir();
        }else if(isset($_GET['funcao']) && $_GET['funcao'] == "editar"){
            $this->editar($_GET['id']);
        }
    }

    private function incluir(){
        $this->cadastro->setEmail($_POST['TxtEmail']);
        $this->cadastro->setSenha($_POST['TxtSenha']);
        $this->cadastro->setEndereco($_POST['TxtEndereco']);
        $this->cadastro->setBairro($_POST['TxtBairro']);
        $this->cadastro->setCep($_POST['TxtCep']);
        $this->cadastro->setCidade($_POST['TxtCidade']);
        $this->cadastro->setEstado($_POST['cboEstado']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }
    public function listar (){
        return $result = $this->cadastro->listar();
    }
}
new ControllerCadastro();
?>