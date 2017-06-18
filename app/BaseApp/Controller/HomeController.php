<?php
namespace BaseApp\Controller;
use BaseApp\Commons\AppController;
use Syph\View\View;
use BaseApp\Model\DAO\HomeDao;

class HomeController extends AppController {
    public $dao;
    public function __construct() {
        $this->dao = new HomeDao();
    }
    public function index() {
        $head = $this->getHead();
        $renderer = $this->get('view.renderer'); 
        $renderer->run('BaseApp:index.php');

        return View::render($renderer, array(
                    'head' => $head,
        ));
    }
    public function clima($id) {
        return $this->dao->climaDao($id); 
    }
    
    public function carrega_dados() {
        $dadosCompanhia = $this->dao->dadosCompanhiaDao($_POST["data"]);
        $posicaoReg   = $this->dao->posicaoRegDao($_POST["data"]); 
        $clima = $this->clima('');
//        $posicaoReg   = $this->dao->query_dadosDao('reg','','','', visao); 
//        print_r($posicaoReg[0]);die();
        $reg = array();
        $i = 0;
        foreach ($posicaoReg as $dadosReg){
          
            $reg[$i] = $dadosReg;
              $i++;
        } 
        $numArray = count($reg);
        $tem = array();
        $i2 = 0;
        foreach ($clima as $dadosClima){
          
            $tem[$i2] = $dadosClima;
              $i2++;
        } 
        $numArray2 = count($tem);
        $dados = array(
                    'dadosCompanhia' => $dadosCompanhia,
                    'posicaoReg' => $reg,
                    'numArray' => $numArray,
                    'numArray2' => $numArray2,
                    'clima' => $clima
        );
        header('Content-Type: application/json');
        return json_encode($dados, JSON_NUMERIC_CHECK);
    }
    public function carrega_distritos() {  
        $posicaoDis   = $this->dao->posicaoDisDao($_POST["chave"], $_POST["data"]);  
        $clima = $this->clima('');
        $dis = array();
        $i = 0;
        foreach ($posicaoDis as $dadosDis){ 
            $dis[$i] = $dadosDis;
            $i++;
        } 
        $numArray = count($dis);
        
        $tem = array();
        $i2 = 0;
        foreach ($clima as $dadosClima){
          
            $tem[$i2] = $dadosClima;
              $i2++;
        } 
        $numArray2 = count($tem);
        
        $dados = array( 
                    'posicaoDis' => $dis,
                    'numArray' => $numArray,
                     'numArray2' => $numArray2,
                    'clima' => $clima
        );   
    header('Content-Type: application/json');
    return json_encode($dados, JSON_NUMERIC_CHECK);
    }
    
    public function carrega_lojas() {  
        $posicaoLoj   = $this->dao->posicaoLojDao($_POST["chave"], $_POST["data"]); 
//        $clima = $this->clima('');
        $loj = array();
        $i = 0;
        foreach ($posicaoLoj as $dadosLoj){ 
            $loj[$i] = $dadosLoj;
            $i++;
        } 
        $numArray = count($loj);
        $dados = array( 
                    'posicaoLoj' => $loj,
                    'numArray' => $numArray  
        );   
    header('Content-Type: application/json');
    return json_encode($dados, JSON_NUMERIC_CHECK);
    }
    
    public function query_dados() {  
    $dp   = $this->dao->query_dadosDao($_POST["data"],$_POST["nivel_geo"],$_POST["nivel_com"],$_POST["chave_geo"],$_POST["chave_com"],$_POST["visao"],$_POST["flag"]);  
    $dados = array(  'resultado' => $dp   );   
    header('Content-Type: application/json');
    return json_encode($dados, JSON_NUMERIC_CHECK);
    }
    
}
