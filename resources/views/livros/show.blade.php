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
</tr>
@endforeach
</table>

</body>

</html>