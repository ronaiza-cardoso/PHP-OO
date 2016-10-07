
##Conteúdo

- usar o gerenciador de dependencias pimple



### Instalando o Pimple
  - no diretório do seu projeto instale o pimple com o seguinte comando
        
            composer require pimple/pimple "~3.0"
            
   - o composer irá fazer a instalação do pimple e setar o arquivo composer.json

###Usando o Pimple
   - utilizar é muito simples, basta coloar os seguintes comandos que tem na documentação
    
            use Pimple\Container;
            
            $container = new Container();
            
   - com esse comando você já tem um novo container configurado 
   - no ``index.php`` terá um exemplo de como utilizar o serviço
   
   O Pimple tem muitos outras funcionalidades que podem ser utilizadas em sua aplicação.
   É essencial a leitura da documentação para poder desfrutar de todas essas funcionalidades
    
    
###Links Úteis

[Pimple GitHub](https://github.com/silexphp/Pimple)


