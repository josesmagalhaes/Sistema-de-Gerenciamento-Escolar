# Sistema-de-Gerenciamento-Escolar

Um Sistema de Gestão Escolar é um sistema de gestão da informação para as instituições de ensino gerenciarem todos os dados dos alunos. Fornece habilidades como matrícula de alunos em aulas, documentação de notas e notas analíticas de cada aluno e outros elementos de avaliação. Além disso, um SMS é usado para planejar os currículos dos alunos, registrar sua frequência e gerenciar todas as necessidades relacionadas aos alunos dentro de uma escola.

Os sistemas de Gestão Escolar variam em tamanho, escopo e habilidades, desde pacotes implementados em organizações relativamente pequenas até cobrir apenas registros estudantis, até soluções corporativas, que visam cobrir a maioria dos aspectos da operação de grandes organizações e suas escolas online com significativa responsabilidade local. Muitos sistemas podem ser escalonados em diferentes níveis de funcionalidade, comprando "módulos" adicionais e geralmente formados por suas instituições de origem para atender às necessidades locais.

# O Projeto

O Sistema de Gestão Escolar é um projeto de código aberto para pessoas que querem pegar a ideia central do processo de dados dentro do sistema.

Este sistema é construído com codeIgniter – estrutura PHP, bootstrap e jquery. O sistema ainda é baseado em Aplicativo Web. Ele fornece funcionalidade avançada executar o requisito básico diário para o programa escolar. O sistema pode ser manipulado por um usuário como administrador.

Neste aplicativo, existem algumas dependências que você precisará entender. Por exemplo, você deseja adicionar a seção para uma turma. Sem informações de turma, as informações da seção não podem ser adicionadas ao sistema. Da mesma forma, esses conceitos se aplicam aos cursos, alunos e etc. 

Para acessar o sistema, use as credenciais abaixo de acordo com seu nível de acessso.
[Demo](http://josemagalhaes.arasistemas.com.br/sistemaescolar)

```
Usuários: Administrador
Username: admin@admin.com
password: 123456
```
```
Usuários: Estudante
Username: estudante@estudante.com
password: 123456
```
# Especificações do Sistema

Administrador
* Gerenciar cursos;
* Gerenciar Turmas;
* Gerenciar Estudantes;
* Gerenciar Frequências;
* Gerenciar Avaliações

Estudantes
* Realizar matrículas;
* Realizar avaliações;
* Ver resultados;

# Instalação

Para instalar o sistema, basta baixar os arquivos, instalar o banco de dados, copiar os arquivos em seu servidor local e realizar mudanças de acordo com suas configurações conforme seguem abaixo.

Primeiramente, mude sua URL para o a URL padrão que for usar.
`aplication\config\config.php`
```
$config['base_url'] = '';
```

Depois, faça as configurações de bancdo de dados, de acordo com as configurações do seu BD.
`aplication\config\database.php`
```
	'hostname' => 'seu host, geralmente usa-se 'localhost'',
	'username' => 'seu usuario',
	'password' => 'sua senha',
	'database' => 'nome do seu banco de dados',
	'dbdriver' => 'mysqli',
```
# Telas do Sistema

![Capturar_2021_03_13_17_18_20_430](https://user-images.githubusercontent.com/31749933/111051789-791c5d80-8434-11eb-97ce-b1f9b87c3aa6.png)
![Capturar_2021_03_13_17_18_40_684](https://user-images.githubusercontent.com/31749933/111051799-85081f80-8434-11eb-9540-b36e1bcca2e5.png)
![Capturar_2021_03_13_17_18_51_84](https://user-images.githubusercontent.com/31749933/111051800-876a7980-8434-11eb-9f43-5d34ff2831d7.png)
![Capturar_2021_03_13_17_19_20_441](https://user-images.githubusercontent.com/31749933/111051801-89ccd380-8434-11eb-97d6-babc965d9c37.png)



