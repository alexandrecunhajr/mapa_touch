<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 12/08/2015
 * Time: 12:47
 * Description: Arquivo de rotas do CRUD
 */
use Syph\Routing\Route;
use Syph\Routing\RouterCollection;

RouterCollection::route('query_dados',
    new Route('/query_dados', function(){
            return array('controller'=>'BaseApp:HomeController:query_dados','args'=>array());
        }
    )
);
RouterCollection::route('carrega_select_estado',
    new Route('/carrega_select_estado', function(){
            return array('controller'=>'BaseApp:HomeController:carrega_select_estado','args'=>array());
        }
    )
);
RouterCollection::route('carrega_select_distrito',
    new Route('/carrega_select_distrito', function(){
            return array('controller'=>'BaseApp:HomeController:carrega_select_distrito','args'=>array());
        }
    )
);
RouterCollection::route('carrega_select_regiao',
    new Route('/carrega_select_regiao', function(){
            return array('controller'=>'BaseApp:HomeController:carrega_select_regiao','args'=>array());
        }
    )
);
RouterCollection::route('consult_cds',
    new Route('/consult_cds', function(){
            return array('controller'=>'BaseApp:HomeController:consult_cds','args'=>array());
        }
    )
);
RouterCollection::route('consult_tipo_lojas',
    new Route('/consult_tipo_lojas', function(){
            return array('controller'=>'BaseApp:HomeController:consult_tipo_lojas','args'=>array());
        }
    )
);
RouterCollection::route('atualiza_lojas',
    new Route('/atualiza_lojas', function(){
            return array('controller'=>'BaseApp:HomeController:atualiza_lojas','args'=>array());
        }
    )
);
RouterCollection::route('consult_estados',
    new Route('/consult_estados', function(){
            return array('controller'=>'BaseApp:HomeController:consult_estados','args'=>array());
        }
    )
);
RouterCollection::route('consult_distritos',
    new Route('/consult_distritos', function(){
            return array('controller'=>'BaseApp:HomeController:consult_distritos','args'=>array());
        }
    )
);
RouterCollection::route('consult_regioes',
    new Route('/consult_regioes', function(){
            return array('controller'=>'BaseApp:HomeController:consult_regioes','args'=>array());
        }
    )
);
RouterCollection::route('atualiza_horarios',
    new Route('/consult_horarios', function(){
            return array('controller'=>'BaseApp:HomeController:consult_horarios','args'=>array());
        }
    )
);
RouterCollection::route('consult_horarios',
    new Route('/consult_horarios', function(){
            return array('controller'=>'BaseApp:HomeController:consult_horarios','args'=>array());
        }
    )
);
RouterCollection::route('consult_lojas',
    new Route('/consult_lojas', function(){
            return array('controller'=>'BaseApp:HomeController:consult_lojas','args'=>array());
        }
    )
);
RouterCollection::route('consult_departamentos',
    new Route('/consult_departamentos', function(){
            return array('controller'=>'BaseApp:HomeController:consult_departamentos','args'=>array());
        }
    )
);
RouterCollection::route('atualiza_departamentos',
    new Route('/atualiza_departamentos', function(){
            return array('controller'=>'BaseApp:HomeController:atualiza_departamentos','args'=>array());
        }
    )
);
RouterCollection::route('root',
    new Route('/', function(){
            return array('controller'=>'BaseApp:HomeController:index','args'=>array());
        }
    )
);
	
RouterCollection::route('login',
    new Route('/login', function(){
            return array('controller'=>'BaseApp:AuthController:login','args'=>array());
        }
    )
);

RouterCollection::route('logout',
    new Route('/logout', function(){
            return array('controller'=>'BaseApp:AuthController:logout','args'=>array());
        }
    )
);
	
/**
 * Rotas globais para as uris
 *		/controller/action/ 
 *		/controller/action
 *		/controller/
 *		/controller
 *		/
 */
RouterCollection::route(
    'CrudAutoRouter2',
    new Route('(/.*?)?(/.*?)?/?', function($controller = '', $action = ''){
		$controller = str_replace('/', '', $controller);
		$action = str_replace('/', '', $action);
		
		$controller = ucfirst(empty($controller) ? 'home' : $controller);
		$action = $action == '' ? 'index' : $action;
		
		$app = 'BaseApp';
		$controller .= 'Controller';
		return array('controller'=>$app.':'.$controller.':'.$action,'args'=>array());
    })
);
	
/**
 * Rotas globais para as uris
 *		/controller/action/id/
 *		/controller/action/id
 */
RouterCollection::route(
    'CrudAutoRouter1',
    new Route('/(\w+)/(\w+)/(\d+)/?', function($controller, $action, $id){
		$app = 'BaseApp';
		$controller = ucfirst($controller.'Controller');
		return array('controller'=>$app.':'.$controller.':'.$action,'args'=>array('id'=>$id));
    })
);	
