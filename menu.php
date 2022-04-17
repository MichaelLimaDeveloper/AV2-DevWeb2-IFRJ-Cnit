<?php

    //Trabalho feito por: Michael Monteiro de Lima e Miryam Estábila Nogueira de Souza;
    //Professor: Alexandre Domingues Goncalves;
    //Disciplina: Desenvolvimento Web II;
    //Turma: INFO 141 (2021.2).
    //Avalição do 2º Bimestre
    //Tema escolhido: Clinica Médica

        $formulario = $_GET['opc'];
    
        if( $formulario=='cliente' ) 
        {
            echo "
            <html>
            <head>
                <meta charset='utf-8'>
            </head>
            <body>
                <center><h1>Insira os dados do Cliente</h1></center>
                <HR>
                    <form action='inicial.cliente.php' method='GET'>
    
                    Nome do cliente <input type='text' name='nome_cliente' required><BR><BR>
                    Código do cliente <input type='text' name='id_cliente' required><BR><BR>
                    Sintomas <input type='text' name='sintomas' required><BR><BR>
                    Data da consulta <input type='date' name='data_consulta' required ><BR><BR>  
                    Data de nascimento <input type='date' name='data_nascimento' required><BR><BR>
                    Endereço <input type='text' name='endereco' required><BR><BR> 
    
                        <input type='submit' name='enviar' value='ENVIAR'> 
                        <input type='reset' name='limpar' value='LIMPAR'> 
                        <input type='hidden' name='op' value='1'><BR>         
                        <input type='hidden' name='entrada' value='2'><BR>
                    </form>
            </body>
            </html>                                                                       
            ";
            echo "</table></center>";
            echo "<br><hr><a href='index.html'>VOLTAR</A>";                               
        }

        if( $formulario=='medico' ) 
        {
            echo "
            <html>
            <head>
                <meta charset='utf-8'>
            </head>
            <body>
                <center><h1>Insira os dados do medico</h1></center>
                <HR>
                    <form action='inicial.medico.php' method='GET'>
    
                    Nome do médico <input type='text' name='nome_medico' required><BR><BR> 
                    Código do médico <input type='text' name='id_medico' required><BR><BR>          
                    Especialidade médica <input type='text' name='especialidade_medica' required><BR><BR> 
                    Número do consultório <input type='text' name='numero_consultorio' required><BR><BR> 
                    Quantidade de auxiliares <input type='text' name='quantidade_auxiliar' required><BR><BR>         
                    Turno do plantão <input type='text' name='turno' required><BR> 
    
                       <input type='submit' name='enviar' value='ENVIAR'> 
                        <input type='reset' name='limpar' value='LIMPAR'> 
                        <input type='hidden' name='op' value='2'><BR>         
                        <input type='hidden' name='entrada' value='2'><BR>
                        </form>
            </body>
            </html>
            ";
            echo "</table></center>";
            echo "<br><hr><a href='index.html'>VOLTAR</A>";   
        } 
?>