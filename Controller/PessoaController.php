<?php

/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * Isso significa que toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 */
class PessoaController
{
    /**
     * Os métodos index serão usados para devolver uma View.
     * Para saber mais sobre métodos estáticos, leia: https://www.php.net/manual/pt_BR/language.oop5.static.php
     */
    public static function index()
    {
        // Para saber mais sobre include , leia: https://www.php.net/manual/pt_BR/function.include.php
        // include './verifica_login.php';
        include './View/logar.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }

    /**
     * Os métodos index serão usados para devolver uma View.
     * Para saber mais sobre métodos estáticos, leia: https://www.php.net/manual/pt_BR/language.oop5.static.php
     */
    public static function site()
    {
        // Para saber mais sobre include , leia: https://www.php.net/manual/pt_BR/function.include.php

        include './site/bootstrap.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }

    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function cadastro()
    {
        
        include './View/cadastro.php'; // Include da View. Note que a variável $model está disponível na View.
    }
    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function painel()
    {

        include './Model/verifica_login.php';

        include './View/painel.php'; // Include da View. Note que a variável $model está disponível na View.
    }

}