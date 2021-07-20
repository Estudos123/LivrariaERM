@include ('layouts.header')
<div class="container">
    <div style="margin-top:25px; padding:30px" class="card" id="after_submit">
        <div class="row">
            <div class="col-sm-12">
                <h2> Editar Conta </h2>
            </div>
        </div>

        <form class="col-sm-12" id="contact_form" action="{{ route('editar_conta')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden"  class="form-control" name="id" type="text" value='{{ $conta->id }}' /><br />

            <div class="row">
                <div class="form-group">

                    <label class="form-label" for="matricula">Matrícula:</label><br />
                    <input id="matricula" class="form-control" name="matricula" type="text" value='{{ $conta->matricula }}' /><br />
                </div>

                <div class="form-group">
                    <label class="label" for="referencia">Mês de Referência:</label><br />
                    <input max="6" required id="referencia" class="form-control" name="mes_referencia" type="text" value=" {{ $conta->mes_referencia }}" /><br />
                </div>

                <div class="form-group">
                    <label class="label" for="data_vencimento">Data de Vencimento:</label><br />
                    <input required type="date" required id="data_vencimento" class="form-control" name="data_vencimento" rows="7" value="{{  $conta->data_vencimento }}" /><br />
                </div>

                <div class="form-group">
                    <label class="label" for="valor">Valor da Conta:</label><br />
                    <input required id="valor" class="form-control" name="valor" rows="7" value="{{ $conta->valor }}" /> <br />
                </div>

                <div class="form-group">
                    <label class="label" for="cod_barras">Código de Barras:</label><br />
                    <textarea id="cod_barras" , class="form-control" , name="cod_barras"> {{ $conta->cod_barras }} </textarea> <br />
                </div>
            </div>
            <input class="btn btn-primary active" id="submit_button" type="submit" value="Salvar" />
            <a type="button" class="btn btn-outline-primary" href="{{ url('/conta/ver/') }}"> Voltar </a>


    </div>

    </form>
</div>

<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>

@include('layouts.footer');
