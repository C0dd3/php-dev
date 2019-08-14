<?php

    # Iniciando primeira classe:

    # Toda classe começa com primeira letra maiuscula, e os demais tambem maiusculas.

    class Pessoa {

        public $nome; # Atributo

        public function falar() { # Método

            return "O meu nome é : ".$this->nome; # Permitir acessar o acesso à variável.

            /* O uso do this server apenas quando o atributo deve se referenciar dentro do metodos,
            caso contrário, usa-se o nome do atributo normal */

        }

    }


    $vicente = new Pessoa(); # O () é um método construtor, mas é opcional caso não tenha o método.

    $vicente->nome = "Vicente Paulo"; # Instancia a variável, mas ele é public.

    echo $vicente->falar();


?>