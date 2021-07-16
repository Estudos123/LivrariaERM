    <!doctype html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title> Cadastrar novo livro </title>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    </head>

    <body>
        <div class="container">
            <div style="margin-top:25px; padding:30px" class="card" id="after_submit">
                <div class="row">
                    <div class="col-sm-12">
                        <h2> Cadastrar Livro </h2>
                    </div>
                </div>

                <form class="col-sm-12" id="contact_form" action="{{ route('salvar_livro')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group">

                            <label class="form-label" for="name">ISBN:</label><br />
                            <input required id="name" class="form-control" name="isbn" type="text" value="" /><br />
                            <span id="name_validation" class="error_message"></span>
                        </div>

                        <div class="form-group">
                            <label class="label" for="email">Nome:</label><br />
                            <input required id="email" class="form-control" name="nome" type="text" value="" /><br />
                            <span id="email_validation" class="error_message"></span>
                        </div>

                        <div class="form-group">
                            <label class="label" for="message">Autor:</label><br />
                            <input required id="message" class="form-control" name="autor" rows="7" /><br />
                            <span id="message_validation" class="error_message"></span>
                        </div>

                        <div class="form-group">
                            <label class="label" for="preco">Preco:</label><br />
                            <input required id="preco" class="form-control" name="preco" rows="7" /> <br />
                        </div>
                    </div>
                    <input class="btn btn-primary active" id="submit_button" type="submit" value="Salvar" />
                    <a  type="button" class="btn btn-outline-primary"  href="{{ url('/livro/ver/') }}"> Voltar </a>



            </div>

            </form>
        </div>

        <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>

    </body>

    </html>
