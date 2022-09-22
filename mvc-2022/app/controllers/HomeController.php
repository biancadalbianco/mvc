<?php

/**
 * home - Controller de exemplo
 * @author Cândido Farias
 * @package mvc
 * @since 0.1
 */
class HomeController extends MainController
{

	public function __construct(){
		parent::__construct();
		if(!isset($_SESSION['user'])){
			header("Location:".URL_BASE."users/login");
		}
	}

	/**
	 * Carrega a página "/views/home/index.php"
	 */
    public function index() {
		# Título da página
		$this->title = 'Home';
		
		# Essa página não precisa de modelo (model)
		
		# Carrega os arquivos do view		
		$this->list();
    }

	/**
	 * Método list, responsavel pela busca da lista de entrada, saida e saldo de um periodo
	 * @access public
	 **/ 
	public function list($dateStart=null, $dateEnd=null) {
		$model=$this->load_model("Home");
		$listMovimentsAno=$model->listAno($dateStart, $dateEnd);
		$data['values']=$listMovimentsAno;
		$listMovimentsMes=$model->listMes($dateStart, $dateEnd);
		$data['values1']=$listMovimentsMes;
		$listMovimentsDia=$model->listDia($dateStart, $dateEnd);
		$data['values2']=$listMovimentsDia;
		$cash_balance=$model->cash_balance();
		$data['cash_balance']=$cash_balance;
		$input=$model->input();
		$data['input']=$input;
		$output=$model->output();
		$data['output']=$output;
		$this->view->show('home/home', $data);
	}
} // class HomeController