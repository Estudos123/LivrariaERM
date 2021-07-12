
<?php
/*** begin the session ***/
session_start();
 
/*** create the form token ***/
$form_token = uniqid();
 
/*** add the form token to the session ***/
$_SESSION['form_token'] = $form_token;
?>


<!doctype html>
<html>

<head>
  <meta charset="UTF-8"/>
  <style>
    table, th, td {
    border: 1px solid black;
  }
   th, td {
    text-align: center;
    padding: 5px;
  };
  
</style>
</head>

<body>

<table>
  <tr >
    <th > ISBN </th>
    <th> NOME </th>
    <th> AUTOR </th>
    <th> PRECO </th>

  </tr>
@foreach ($livros as &$livro) 
<tr>
  <td> {{ $livro->isbn }} </td>
  <td> {{ $livro->nome }} </td>
  <td> {{ $livro->autor }} </td>
  <td> {{ $livro->preco }} </td>
  <td> <a href="{{ url('/livro/editar/'. $livro->id . '') }}"> Editar </a></td>
  <td> <a href="{{ url('/livro/excluir/'. $livro->id . '') }}"> Excluir </a>  </td>
</tr>
@endforeach

</table>

<button> <a href="{{ url('/livro/novo') }}"> Cadastrar Livro </a> </button> 

</body>

</html>