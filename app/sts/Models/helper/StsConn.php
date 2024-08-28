<?php 
namespace Sts\Models\helper;

// Verifica se a constante de segurança está definida para proteger o acesso não autorizado
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class StsConn {
    private $pdo;
    private $host;
    private $dbname;
    private $user;
    private $password;

    /**
     * Construtor da classe StsConn
     * Inicializa as credenciais do banco de dados e estabelece a conexão.
     */
    public function __construct() {
        $this->host = getenv('DB_HOST') ?: 'localhost';
        $this->dbname = getenv('DB_NAME') ?: 'database_name';
        $this->user = getenv('DB_USER') ?: 'username';
        $this->password = getenv('DB_PASSWORD') ?: 'password';

        $this->connect();
    }

    /**
     * Estabelece a conexão com o banco de dados usando PDO
     */
    private function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
            $this->pdo = new \PDO($dsn, $this->user, $this->password);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // Log o erro em um arquivo separado para análise futura, sem expor detalhes ao usuário
            error_log($e->getMessage(), 3, '/var/log/app_errors.log');
            die("Erro: Não foi possível conectar ao banco de dados.");
        }
    }

    /**
     * Retorna a instância PDO
     *
     * @return \PDO
     */
    public function getPdo() {
        return $this->pdo;
    }
}

//Teste o Manuseio de Erros

// Configure um erro de conexão intencionalmente e verifique o arquivo de log

//$dsn = "mysql:host=invalid_host;dbname=invalid_db;charset=utf8";

//export DB_HOST='localhost'
//export DB_NAME='test_db'
//export DB_USER='test_user'
//export DB_PASSWORD='test_password'

//chmod 600 /var/log/app_errors.log

