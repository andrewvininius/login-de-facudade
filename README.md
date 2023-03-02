
<h1>login-de-facudade</h1>

> Status: concluído  🖥️

### Este é um código PHP para fazer a validação do login de um usuário em um sistema web

## Aqui está uma explicação do que cada parte do código faz :

+ A primeira linha inicia a sessão. Isso permite que o sistema armazene informações do usuário, como o nome de usuário, enquanto ele está logado.
+ O bloco de código seguinte verifica se o usuário já está logado. Se o nome de usuário já estiver armazenado na sessão, o usuário será redirecionado para a página do dashboard, porque não faz sentido fazer login novamente.
+ O próximo bloco de código verifica se o formulário de login foi submetido. Isso acontece quando o usuário clica no botão "entrar" na página de login. Se o formulário foi submetido, o código realiza a validação do login.
+ Dentro do bloco de código de validação do login, o código pega as informações de nome de usuário e senha que foram enviadas pelo formulário.
+ Depois disso, o código pode fazer uma consulta ao banco de dados para verificar se o nome de usuário e senha são válidos. Neste caso, a consulta não é realizada e o nome de usuário e senha são comparados diretamente.
+ Se o nome de usuário e senha estiverem corretos, o código salva o nome de usuário na sessão e redireciona o usuário para a página do dashboard. Isso indica que o usuário está autenticado e pode acessar o sistema.
+ Caso contrário, se as credenciais estiverem incorretas, o código exibe uma mensagem de erro na página de login. Isso informa ao usuário que algo deu errado e que ele precisa tentar novamente com as informações corretas.


## Tecnologias Usadas:

<table>
  <tr>
    <td>PHP</td>
    
  </tr>
 
</table>



