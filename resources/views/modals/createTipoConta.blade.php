    <!-- Modal -->
    <div class="modal fade" id="modalTipoConta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar Tipo de Conta </h5>
                    <button onclick="$('#modalTipoConta').modal('toggle')" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="postTipoConta" method="POST" action="{{ url('tipoconta/novo' )}}">
                    @csrf
                    <div class="modal-body">
                        <row>
                            <label for="descricao" class="form-label">Tipo de Conta</label>
                            <input required name="descricao" type="text" class="form-control" id="descricao" aria-describedby="emailHelp">
                            <div id="descricaoHelp" class="form-text">Descrição do tipo de conta.</div>
                        </row>

                    </div>

                    <div class="modal-footer">
                        <button onclick="$('#modalTipoConta').modal('toggle')" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
