<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nová aktualita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="error_space"></div>
          <div class="input-group mx-1 my-2">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1"><i class="far fa-question-circle"></i>   </span>
            </div>
            <input id="que" name="question" type="text" class="form-control" placeholder="Zadej otázku">
          </div>
          <div class="input-group my-3  ">
            <h5>Odpověď:</h5>
            <textarea id="ans" class="from-control w-100" placeholder="Odpověď"> </textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
        <button  id="save" type="button" class="btn btn-primary">Uložit</button>
      </div>
    </div>
  </div>
</div>