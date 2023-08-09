Rhuan Carlos Zucarelli / RA= 11210

ex01> o erro se dava por conta da falta de um ';' , assim que foi colocado sumiu o erro fazendo funcionar perfeitamente.

ex02> O problema ocorria por conta que faltava o metodo 'private $age', o mesmo era chamdo dentro
de uma function e como nao existia, dava erro.

ex03> O problema se dava por conta que faltava a function multiply que era chamada dentro da 
operacao, assim que foi criada a function com o metodo multiply o erro foi arrumado.

ex04> O problema da operacao é que estava tentando fazer uma uma divizao com numero quebrado
sendo que o parametro so recebia numero inteiros, assim sendo quando trocado por float 
fazia a divizao correta.

ex05> Como a clase esta como private, ela nao pode ser vista fora do metodo, sendo assim foi feito 
uma function onde passa este metodo para fora do metodo, assim resolvendo o problema.

ex06> O problema era por conta da function estar retornando duas "String" e no metodo que printa em 
tela estava passando apenas uma "String", assim que foi colocado outra "String" no metodo resolveu o problema.

ex07> O problema se encontra na variavel de "minimumValue", a variavel está vulneravel a auterações durante o processo, o correto seria
a mesma esta no modo private.