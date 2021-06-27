<!--  Modal content for the above example -->
<div class="modal tampilModal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="judul_form"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form id="formKu" class="was-validated">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-10">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="nm_kriteria">Nama Kriteria</label>
                                        <input type="text" class="form-control" name="nm_kriteria" id="nm_kriteria"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="jenis">Jenis</label>
                                        <select id="jenis" name="jenis" data-toggle="select" required
                                            class="form-control">
                                            <option value="X" selected="">X</option>
                                            <option value="Z">Z</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> <!-- // END .modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="tombolForm"></button>
                    </div> <!-- // END .modal-footer -->
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
