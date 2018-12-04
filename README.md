
Galiboo Music AI: Case Study
===================


## Sobre o projeto

Na continuação do 1.º trabalho de Laboratório de Aplicações Interativas onde o objetivo era criar uma aplicação interativa, neste 2.º trabalho o objetivo era criar um gestor de conteúdos. Eu decidi que sendo sobre Inteligência Artificial e sendo interativa, podia explorar um pouco uma API recente chamada Galiboo Music AI, uma inteligência artificial que analisa música (entre várias outras funcionalidades).

## Website URL

Hospedagem para ter o backend a funcionar:
https://galiboo.000webhostapp.com

Repo no GitHub:
https://github.com/editeccfernandes/galiboo

## Disclaimer e fontes

A informação deste website foi retirada das seguintes fontes: 

**Página oficial da API** 
https://www.galiboo.com/

**Documentação** 
https://apidocs.galiboo.com/

**Design e Programação** 
Edite Fernandes

**Downloads** 
https://github.com/editeccfernandes/galiboo/tree/master/docs

## Acesso ao backoffie, algumas boas práticas e troubleshooting:

### Acesso ao backoffice:
O acesso ao backoffice por opção está aberto a toda a comunidade. Isto significa que podem escrever o que quiser mas sejam pessoas simpáticas.
Os campos podem ser submetidos vazios.

### Boas práticas:
Ambas APIs usadas neste projeto estão em fase beta o que significa que se me perguntarem, funciona ou não funciona, eis a questão. Sei que funciona em Google Chrome, no resto, sei que a API de Web Speech não dá. 

A API da Galiboo Music AI  tem 250 pedidos disponíveis por mês dos quais, 25 análises de músicas do Youtube. Evitem VEVOs, playlists e gostaria imenso de dizer que assim tenho a certeza que funciona, só que não. Cada chamada para analisar uma música desconta no plafond gratuito por isso usa com moderação.

A seleção por...*range*...(ou qualquer outra tradução portuguesa para esta palavra) está limitada porque, well, já mencionei que a API está em fase beta? pronto, então é por causa disso. Dos meus testes que incluíram colocar cerca de 30 ou mais parâmetros com valores aleatórios (loucura total), a resposta foi praticamente a mesma. Se não variar, não consigo fazer muito sobre o assunto.

### Troubleshooting:

#### A análise não funciona ou demora muitoooo tempo:

 1. Os pedidos foram esgotados 
 2. A música que escolheste está a retornar um erro 200
 3. O pedido excedeu o limite máximo 
4. O vídeo não foi reconhecido (o mesmo que está no ponto 2 mas mais simplificado) 
5. A tua internet não está a colaborar
6.

#### A seleção por *range* retorna sempre The Shins:
1. A API está em beta e os endpoints estão  sempre a mudar, sorry, torna-se um pouco imprevisível de quando a situação pode mudar.

#### O Web Speech não funciona:
1. Tens de estar em Google Chrome para funcionar, é uma funcionalidade que ainda está em draft
2. Fala perto do microfone, haverás de ver algumas mudanças no texto
3.  Não complexifiques a procura
4. Só funciona em inglês


#### Outras perguntas:

 1. Podes sempre deixar nos comentários do site, I guess.
