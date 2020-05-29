 <!-- Modal -->
 <div class="modal fade" id="detalhesProduto" tabindex="-1" role="dialog" aria-labelledby="detalhesModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="detalhesModal">Informações do Produto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <ul>
             {{-- <li>Nome do Produto:{{$produtosUm->nome_do_produto}}</li> --}}
             {{-- <li>Preço: R${{$produto->preco}},00</li> --}}
            {{-- <li>Quantidade:{{$produto->quantidade}} unidades</li>  --}}
        </ul>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
