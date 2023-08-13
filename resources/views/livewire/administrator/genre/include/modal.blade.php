<!-- Modal 3-->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group first">
                        <label for="name">Nama Genre</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model='name' name="name" id="name" autocomplete="off">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
