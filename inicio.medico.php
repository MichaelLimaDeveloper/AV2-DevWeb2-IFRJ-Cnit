<?php

    //Trabalho feito por: Michael Monteiro de Lima e Miryam Estábila Nogueira de Souza;
    //Professor: Alexandre Domingues Goncalves;
    //Disciplina: Desenvolvimento Web II;
    //Turma: INFO 141 (2021.2).
    //Avalição do 2º Bimestre
    //Tema escolhido: Clinica Médica

require_once("class.medico.php");

$ob1 = new Medico();
$ob2 = new Medico();

$nome_medico = $ob1->getNome_medico();
$id_medico = $ob1->getId_medico();
$especialidade_medica = $ob1->getEspecialidade_medica();
$numero_consultorio = $ob1->getNumero_consultorio();
$quantidade_auxiliar = $ob1->getQuantidade_auxiliar();
$turno = $ob1->getTurno();

$nome_medico = $_GET['nome_medico'];
$id_medico = $_GET['id_medico'];
$especialidade_medica = $_GET['especialidade_medica'];
$numero_consultorio = $_GET['numero_consultorio'];
$quantidade_auxiliar = $_GET['quantidade_auxiliar'];
$turno = $_GET['turno'];

$ob1->setNome_medico($nome_medico);
$ob1->setId_medico($id_medico);
$ob1->setEspecialidade_medica($especialidade_medica);
$ob1->setNumero_consultorio($numero_consultorio);  
$ob1->setQuantidade_auxiliar($quantidade_auxiliar);
$ob1->setTurno($turno);


//$ob1->setNome_medico($GET['nome_medico']);
//$ob1->setId_medico($GET['id_medico']);
//$ob1->setEspecialidade_medica($GET['especialidade_medica']);
//$ob1->setNumero_consultorio($GET['numero_consultorio']);
//$ob1->setQuantidade_auxiliar($GET['quantidade_auxiliar'])
//$ob1->setTurno($GET['turno']);

echo"<br>";

$nome_medico= $ob1->getNome_medico();
$id_medico = $ob1->getId_medico();
$especialidade_medica = $ob1->getEspecialidade_medica();
$numero_consultorio = $ob1->getNumero_consultorio();
$quantidade_auxiliar = $ob1->getQuantidade_auxiliar();
$turno = $ob1->getTurno();

echo "
<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8'>
        </head>
    <body>
        <p> <font size='4'>
            Nome do Medico: $nome_medico <br>
            Código do Medico: $id_medico <br>
            Especialidade Médica: $especialidade_medica <br>
            Numero do Consultorio: $numero_consultorio <br>
            Quantidade de Auxiliar: $quantidade_auxiliar <br>
            Turno: $turno <br> 
        </font> </p>
    <p>
        <font size='3' face='Arial'>
            <a href='index.html'>Voltar</a><br><br>
        </font>
    </p>    
    </body>
</html>
";
?>