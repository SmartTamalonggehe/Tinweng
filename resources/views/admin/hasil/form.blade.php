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
                <form id="formKu" class="custom-validation">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="nm_pemakai">Nama Pemakai</label>
                                        <input type="text" class="form-control" name="nm_pemakai" id="nm_pemakai"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="umur">Umur</label>
                                        <input type="text" class="form-control" name="umur" id="umur" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="jenkel">Jenis Kelamin</label><br>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Laki-laki" value="Laki-laki" name="jenkel"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="Laki-laki">Laki-laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="Perempuan" name="jenkel" value="Perempuan"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="Perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat" required="">
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
