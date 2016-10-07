
##Conteúdo

- Refatorar o código e separar a responsabiliade do produto, ele será apenas uma classe que cuida do que se refere ao produto
    - vamos criar uma interface para a classe produto com os métodos inerentes à classe produto [IServiceProduto](PHP-POO/aula-9/src/Source/IServiceProduto.php)
    - vamos criar a classe de serviço do produto e implementar os métodos definidos na interface [ServiceProduto](PHP-POO/aula-9/src/Source/ServiceProduto.php)
    - para que essas classes funcione precisaremos registrá-las no nosso serviço [service.php](PHP-POO/aula-9/public/)
 Após essa configuração o nosso código ficou mais organizado 

