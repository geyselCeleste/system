<?php 
	// La clase Core carga los controladores, URL format = /controller/method/params

	class Core {
		// coontrolador inicial de web es = Users y el método es = index    localhost/web/     users/index
		protected $currentController = 'Users';
		protected $currentMethod = 'index';
		protected $params = [];

		public function __construct(){
			// obtener URL y convertir en Array 
			$url = $this->getUrl();

			// Verificar que exista el controlador solicitado
			if(file_exists('../app/controllers/' . ucwords($url[0] ?? '') . '.php')) {
				// asignar indice 0 del array a controlador inicial
				$this->currentController = ucwords($url[0]);
				// vaciar el indice del array
				unset($url[0]);
			}

			// cargar el controlador solicitado
			require_once '../app/controllers/' . $this->currentController . '.php';

			// Instanciar el controlador solicitado
			$this->currentController = new $this->currentController;
			// verificar y asignar indice 1 del array
			if(isset($url[1])){
				// verificar si el método solicitado existe en el controlador
				if(method_exists($this->currentController, $url[1])){
					$this->currentMethod = $url[1];
					// vaciar el indice del array
					unset($url[1]);
				}
			}

			// obtener los parametros de la URL
			$this->params = $url ? array_values($url) : [];

			//call a callback with array of params
			call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
		}
		// usar el parametro 'url' cargado en .htaccess de carpeta public/  
		public function getUrl(){
			if(isset($_GET['url'])) {
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}
		}
	}
 ?>