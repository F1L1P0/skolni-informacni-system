<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle">Změnit rozvrh</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <form action="predmet.php" method="POST">
        <div class="modal-body">
            <input id="input_den" type="hidden" name="den">
            <input id="input_hodina" type="hidden" name="hodina">
            <input type="hidden" name="trida" value="<?= $rozvrhId_get ?>"> 

            <select name="predmet">
              <option value="0">Volná hodina</option>
              <?php foreach ($select_predmety as $predmet) : ?>
                <option value="<?= $predmet['id'] ?>"><?= $predmet['nazev'] ?></option>
              <?php endforeach; ?>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
          <input type="submit" class="btn btn-primary" value="Ulož rozvrh">
        </div>
      </form>
  </div>
</div>
</div>