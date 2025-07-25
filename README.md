# VERIFICADOR DE NÚMERO DE TELEFONE COM ABSTRACT API

## CONTEÚDO
- [Instalação](#instalação)
- [Uso](#uso)
- [Licença](#licença)

## Instalação
  Não é necessária uma instalação por assim dizer, mas apenas uma inclusão da função no seu código.
  Há duas formas principais de instalar: 1) Inclua o arquivo da função no seu código (```require_once "fn.php";```) 2) Copie e cole a função, junto das macros definidas (os "define") para o seu código de modo que não haja conflito entre nada.
## Uso
  A utilização é feita de forma bem simples.
  Apenas chame a função ```verify_phone_number``` com o número desejado como parâmetro.
  Ex.:
  ```php
    verify_phone_number(5511999999999);
  ```
  Dessa forma, a função retornará um objeto contendo as informações captadas sobre o número de telefone inserido.
## Licença
  ```
    Verificador de Número de Telefone com Abstract API
    Copyright (C) 2025  mfcphp

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
  ```
