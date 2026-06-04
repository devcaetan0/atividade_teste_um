**CRIAÇÃO DE TELA DE LOGIN E CADASTRO DE USUÁRIOS**

Objetivo: Simular a sistematização de um login e cadastro de usuários, utilizando as linguagens PHP e SQL para gerar sessões e um CRUD que interage e manipula as informações com o banco de dados, que roda via servidor local no XAMPP.

**TECNOLOGIAS UTILIZADAS**

Front-end: HTML e CSS simples.  
Back-end: PHP para conexão e manipulação de dados.  
Banco de dados: MySQL integrado pelo XAMPP.  
Versionamento: Git e GitHub para salvar o projeto.  

**ESTRUTURA DAS PASTAS E ARQUIVOS**

index.php: Página de login e verificação do usuário.

*INFRA*

infra/db/script.sql: Script para criar o banco de dados e a tabela de usuários.  
infra/db/connect.php: Script para realizar a conexão com o banco via MySQLi.

*PUBLIC*

public/home.php: Página para realizar o cadastro de usuários.  
public/logout.php: Script para encerrar a sessão do usuário logado.  

public/component/navbar.php: Arquivo de componente para a navbar.  
public/component/table.php: Arquivo de componente para a tabela de usuários.

*STYLE*

style/style.css: Arquivo para a estilização de elementos.