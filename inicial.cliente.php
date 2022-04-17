<?php

    //Trabalho feito por: Michael Monteiro de Lima e Miryam Estábila Nogueira de Souza;
    //Professor: Alexandre Domingues Goncalves;
    //Disciplina: Desenvolvimento Web II;
    //Turma: INFO 141 (2021.2).
    //Avalição do 2º Bimestre
    //Tema escolhido: Clinica Médica

require_once("class.cliente.php");

$ob1 = new Cliente();
$ob2 = new Cliente();

$nome_cliente = $ob1->getNome_cliente();
$id_cliente = $ob1->getId_cliente();
$data_consulta = $ob1->getData_consulta();
$data_nascimento = $ob1->getData_nascimento();
$endereco = $ob1->getEndereco();

$nome_cliente = $_GET['nome_cliente'];
$id_cliente = $_GET['id_cliente'];
$data_consulta = $_GET['data_consulta'];
$data_nascimento = $_GET['data_nascimento'];
$endereco = $_GET['endereco'];

$ob1->setNome_cliente($nome_cliente);
$ob1->setId_cliente($id_cliente);
$ob1->setData_consulta($data_consulta);
$ob1->setData_nascimento($data_nascimento);  
$ob1->setEndereco($endereco);

//$ob1->setNome_cliente($GET['nome_cliente']);
//$ob1->setId_cliente($GET['id_cliente']);
//$ob1->setData_consulta($GET['data_consulta']);
//$ob1->setData_nascimento($GET['data_nascimento']);  
//$ob1->setEndereco($GET['endereco']);

echo"<br>";

$nome_cliente= $ob1->getNome_cliente();
$id_cliente = $ob1->getId_cliente();
$data_consulta = $ob1->getData_consulta();
$data_nascimento = $ob1->getData_nascimento();
$endereco = $ob1->getEndereco();

    echo "
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8'>
            </head>
        <body>
            <p> <font size='4'>
                Código do atleta: $nome_cliente <br>
                Código do Cliente: $id_cliente <br>
                Data da Consulta: $data_consulta <br>
                Data de nascimento: $data_nascimento <br>
                Endereço: $endereco <br> 
            </font> </p>
        <p>
            <font size='3' face='Verdana'>
                <a href='index.html'>Voltar</a><br><br>
            </font>
        </p>    
        </body>
    </html>
    ";
?>