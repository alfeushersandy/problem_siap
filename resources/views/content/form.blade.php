<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-form-Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form id="form-problem" action="{{ route('siap.create') }}" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-form-Label">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group row">
                    <label for="tanggal" id="label_tanggal_aset" class="col-lg-2 col-lg-offset-1 control-label">Tanggal</label>
                    <div class="col-lg-6">
                        <input type="date" value="{{ date('Y-m-d') }}" name="tanggal" id="tanggal" class="form-control datepicker" required autofocus
                                style="border-radius: 0 !important;">
                            <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" id="label_image_aset" class="col-lg-2 col-lg-offset-1 control-label">Image</label>
                    <div class="col-lg-6">
                        <input class="form-control" type="file" name="image">
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="narasi" class="col-lg-2 col-lg-offset-1 control-label">Narasi</label>
                    <div class="col-lg-6">
                        <textarea name="narasi" id="narasi" rows="3" class="form-control"></textarea>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-lg-2 col-lg-offset-1 control-label">Kategori</label>
                    <div class="col-lg-6">
                        <select name="kategori" id="kategori" class="form-control" required>
                            <option value="update">Update</option>
                            <option value="bug">Bug</option>
                        </select>
                        <span class="help-block with-errors"></span>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
  </div>