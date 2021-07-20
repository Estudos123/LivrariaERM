@include ('layouts.header');

<div class="card" style="margin: 50px; padding: 20px;">

    <h1 style="margin-top:50px"> Lista de Contas </h1>
    <p> Do it now </p>

    <a style="float:right" class="btn btn-outline-primary" href="{{ url('/conta/novo') }}"> Cadastrar Nova Conta</a>


    <table class="table" style="margin-top:80px">
        <tr>
            <th> MATRICULA </th>
            <th> MÊS DE REFERÊNCIA </th>
            <th> DATA DE VENCIMENTO </th>
            <th> VALOR </th>
            <th> CÓDIGO DE BARRAS </th>
            <th> PAGO? </th>
            <th> EDIT </th>
            <th> REMOVE </th>
        </tr>
        @foreach ($contas as &$conta)
        <tr>
            <td> {{ $conta->matricula }} </td>
            <td> {{ $conta->mes_referencia }} </td>
            <td> {{ date_format( new DateTime($conta->data_vencimento), 'd/m/y')}} </td>
            <td> R$ {{ str_replace('.', ',', $conta->valor) }} </td>
            <td> {{ $conta->cod_barras }} </td>
            @if ($conta->ind_pago == 1)
            <td> <svg color="green" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg> </td>
            @else
            <td> <a id="informarpagamento" href=" {{ url('conta/informarpagamento/'.$conta->id.'')  }} "> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                    </svg> </a> </td>
            @endif
            <td> <a href="{{ url('/conta/editar/'. $conta->id . '') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                    </svg> </a></td>
            <td> <a id="deleteAccount" href="{{ url('/conta/excluir/'. $conta->id . '') }}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                    </svg></a> </td>
        </tr>
        @endforeach
        <i class="bi bi-pencil"></i>
    </table>

</div>

{{ $contas->links() }}


@include('layouts.footer');
