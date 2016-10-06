
##Conteúdo

- Organizar código para receber o Pimble (container de serviços)
- Implementar o composer (gerenciador de bibliotecas PHP)



### Preparando o Composer
  - fazer a instalação do composer
  - entrar no diretório da aplicação
  - criar arquivo composer.json
    - configurar autoload dentro do arquivo
    - nesse aquivo configuramos o autoload para que ele carregue os arquivos do namespace Source 
    
    
          
          {
            "autoload":{
              "psr-4":{ 
                "Source\\":"src/Source"
              }
            }
          }
    
   - execute o comando ``composer install`` no diretório do seu projeto
   - Crie os diretórios configurados no arquivo composer.json
   - apos essas configurações não vai ser mais preciso utilizar os vários requires 
    
    
###Links Úteis

[Laravel/Service Container](http://pimple.sensiolabs.org/)
[O que é composer](http://www.laravel.com.br/o-que-de-fato-e-o-composer/)
[Padrões Recomendados em PHP](http://www.php-fig.org/psr/)


