# Login-SQL-Injection

# ATENÇÃO: Esse projeto foi feito totalmente por mim em local controlado com dados fictícios, com finalidade para aprendizado na área de Cybersecurity.

Esse projeto apresenta um sistema de login de empresa totalmente desprotegido, nele usei uma técnica de SQL Injection para extrair dados do bancos de dados da empresa sem autorização.

O projeto conta com duas páginas, busca de usuário (busca.php) e login de usuário (login.php), ambas com vulnerabilidades e cópias com correções para um sistema protegido contra SQL Injection, os arquivos e banco de dados SQL estarão disponíveis no repositório.

<img width="512" height="243" alt="1000097539" src="https://github.com/user-attachments/assets/c995dbd4-2eb6-4df8-8dd0-a42dc77ebefc" />
Página - busca.php

<img width="666" height="230" alt="1000097545" src="https://github.com/user-attachments/assets/1de5f76a-b4f3-4260-8e8d-89374de0821a" />
Página - login.php

------------------------------------

<img width="144" height="99" alt="1000097543" src="https://github.com/user-attachments/assets/d4a37af9-6278-4123-839f-696744bb902a" />

Tabela DB

<img width="622" height="209" alt="1000097542" src="https://github.com/user-attachments/assets/4968f9cd-d935-4b5d-a4bd-8b0ddbfdb104" />
Dados DB

------------------------------------

Tentativas de SQL Injection:

<img width="557" height="285" alt="1000097547" src="https://github.com/user-attachments/assets/f990285a-75f3-4af0-beee-b075e7de5e88" />
#1 - login.php

<img width="575" height="455" alt="1000097538" src="https://github.com/user-attachments/assets/60853d6e-f5a4-4eae-96e5-b7585ea2b679" />
2# - busca.php


Foi usado o comando ' OR '1'='1' no input senha, 1=1 significa e o primeiro número é o segundo número são iguais, ja o SQL quando lê esse comando ele retorna TRUE (VERDADEIRO), pois 1 é igual a 1 e é verdadeiro.

------------------------------------


Tentativa SQL Injection em Sistema Seguro:

<img width="557" height="285" alt="1000097548" src="https://github.com/user-attachments/assets/c5c44dd7-d2c2-42b9-8ed9-5261c586a222" />

#1 - login.php
