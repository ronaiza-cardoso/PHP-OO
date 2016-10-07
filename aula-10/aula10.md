
##Conteúdo

- Configurar classe [produto.php](PHP-POO/aula-10/src/Source/produto.php)
    - colocar atributos e métodos de retorno e alteração de atributos
    - configuramos uma interface de produto para evitar o acoplamento [IProduto.php](PHP-POO/aula-10/src/Source/IProduto.php)
    - apos essa configuração iremos registar a interface do produto no servico [ServiceProduto](PHP-POO/aula-10/src/Source/ServiceProduto.php)
        - tia por que você tá fazendo isso? 
            
               Quando formos inserir os dados em prduto
               iremos receber esse produto no nosso serviço
               a interface previne que mudanças em nosso sistema 
               seja uma grande catástrofe, caso for necessário adicionar 
               um novo método ou atributo à classe produto usaremos a interface
               e não precisaremos modificar o nosso ServiceProduto
               
    - agora iremos registrar a nossa service produto no nosso serviço [service.php](PHP-POO/aula-10/public/service.php)
        