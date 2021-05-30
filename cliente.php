<?php
	class Cliente {
		// atributos de classe
		public $codigo;
		public $nome;
		public $casado;
        public $idade

		// construtor da classe padrão
		function __construct() {
			$this->codigo = 0.0; // inteiro zero
			$this->nome = ""; // string (caractere) nula
			$this->casado = false;
            public $idade = 0;
        
		}

		// métodos acessores getters e setters
		// setters - altera o valor do atributo de classe
		public function setCodigo($codigo) {
			$this->codigo = $codigo;	
		}

		public function setNome($nome) {
			$this->nome = $nome;
		}

        public function setIdade($idade){
            $this->idade = $idade;
        }

		// getters - lê o valor do atributo de classe
		public function getCodigo() {
			return $this->codigo;
		}

		public function getNome() {
			return $this->nome;
		}

        public function getIdade(){
            return $this->idade;
        }

		// métodos personalizados
		// método para exibir as informações do funcionário
		public function exibeFuncionario() {
			echo "Cliente " . $this->getCodigo() . ", Nome: " . $this->getNome() . "tem a idade de" . $idade . "<br>";			
		}

		// destrutor da classe - o que vai acontecer quando a classe for desalocada da memória
		function __destruct () {
			echo "</br>____ FIM (Funcionário ". $this->getNome() . " tem a idade de " . $this->getIdade() . ")___</ br></ br>";
		}
	}

	// instanciando a classe Funcionario (criando objeto)
	$func1 = new Funcionario(); // objeto de Funcionario Anderson
	var_dump($func1); // visualização da classe depois de criada
	echo "</br></br>";
	$func1->setCodigo(12);
	$func1->setNome("Anderson");
    $func1->setIdade(25);

	$func2 = new Funcionario();// objeto de Funcionario Giovana
	var_dump($func2); // visualização da classe depois de criada
	echo "</br></br>";
	$func2->setCodigo(15);
	$func2->setNome("Giovana");
    $func2->setIdade(20);

	// visualização das classes depois de criadas
	var_dump($func1); echo "</br></br>";
	var_dump($func2); echo "</br></br>";
	
	// exibir os funcionários
	echo "***** FUNCIONÁRIOS ******<br><br>";
	// echo "Funcionário " . $func1->getCodigo() . ", Nome: " . $func1->getNome() . "<br>";
	// echo "Funcionário " . $func2->getCodigo() . ", Nome: " . $func2->getNome();

	// exibe o funcionário usando o método exibeFuncionario
	$func1->exibeFuncionario();
	$func2->exibeFuncionario();
?>