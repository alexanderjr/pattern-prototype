# Prototype
É um padrão que tem como objetivo facilitar a replicação de objetos de mesma classe, sem sobrecarregar a memória da aplicação. Através da clonagem de objetos, é possível reduzir o consumo de processamento em memória e criar várias instâncias da mesma classe.
### Cenário de Aplicação
Contextos onde se torna necessário a criação de diversas instâncias da mesma classe. Ex.: Vários ecommerces permite a customização de alguns produtos, por exemplo camisa de futebol, onde é possível customizar número e nome.

Supondo que ao final do di, na fábrica de produz tais camisas, o operador precisa imprimir em tela de cada produto, quais são as customizações.

Camisa Real Madrid
Tamanho: M Nome:Alex N: 10
Tamanho: G Nome:Junior N: 5
Tamanho: P Nome:Pedro N: 51

Neste cenário, podemos criar um único objeto e alterar as propriedades de cada objeto sem a necessidade de instânciar um objeto toda vez que passamos pelo registro de cada cliente.

São papéis do Prototype

- Prototype, classe abstrata que extende da classe concreta.
- Concrete Prototype, classe concreta que será utilizada como base da prototype
- Client, classe responsável (não obrigatório) por criar os objetos de protótipos e efetuar a clonagem
### Vantagens
- Reduz consumo de processamento e memória na criação de objetos
- Reduz acoplamaneto das classes no sistema (pois a instância do produto esta no extends da classe Prototype, cabendo alteração somente nela)

#### Perguntas
- Existe mesmo vantagem no uso de prototype ? Pois deve-se "duplicar" uma classe para criar o papel de prototype
- Seria errado não atribuir ao papel de Concrete Prototype o abstract ? Uma vez que já se pode utilizar a classe no sistema apenas aplicando a classe Prototype, que extende da Concrete Prototype.

##### Referências 
[Source Making](https://sourcemaking.com/design_patterns/prototype)

[Livro de Design Patterns com PHP7](https://www.casadocodigo.com.br/products/livro-design-paterns-php)