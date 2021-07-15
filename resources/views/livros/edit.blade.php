<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <title > Cadastrar novo livro </title>
   </head>
   <body>
      <div id="after_submit"></div>
      <form id="contact_form" action="{{ route('editar_livro')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <input type="hidden" name="id" value="{{$livro->id}}" />

         <div class="row">
            <label class="required" for="name">ISBN:</label><br />
            <input value="{{ $livro->isbn }}" id="name" class="input" name="isbn" type="text" value="" size="30" /><br />
            <span id="name_validation" class="error_message"></span>
         </div>
         <div class="row">
            <label class="required" for="email">Nome:</label><br />
            <input  value="{{ $livro->nome }}" id="email" class="input" name="nome" type="text" value="" size="30" /><br />
            <span id="email_validation" class="error_message"></span>
         </div>
         <div class="row">
            <label class="required" for="message">Autor:</label><br />
            <input  value="{{ $livro->autor }}" id="message" class="input" name="autor" rows="7" cols="30"/><br />
            <span id="message_validation" class="error_message"></span>
            <label class="required" for="message">Preco:</label><br />
            <input  value="{{ $livro->preco }}" id="message" class="input" name="preco" rows="7" cols="30"/><br />
            <span id="message_validation" class="error_message"></span>
         </div>
         <input id="submit_button" type="submit" value="Salvar" />

      </form>
   </body>
</html>