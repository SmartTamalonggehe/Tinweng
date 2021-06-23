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
                        <div class="row">
                            @php
                            $jmlh_kriteria=$kriteria->count()-1;
                            @endphp
                            @foreach ($kriteria->sortBy('jenis') as $key=>$itemKriteria)

                            <div class="col-12">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <div class="controls">
                                        @php
                                        if ($key===0) {
                                        $label="IF";
                                        } elseif ($key=== $jmlh_kriteria) {
                                        $label="THEN";
                                        }
                                        else {
                                        $label ="AND";
                                        }
                                        @endphp
                                        <label for="nilai_kriteria_id">{{ $label }}</label>
                                        <select id="nilai_kriteria_id" name="nilai_kriteria_id[]" data-toggle="select"
                                            required class="form-control">
                                            <option value="" selected="">Pilih Kriteria</option>
                                            @foreach ($nilai_kriteria as $item)
                                            @if ($itemKriteria->nm_kriteria==$item->kriteria->nm_kriteria)
                                            <option value="{{ $item->id }}">
                                                {{ $item->kriteria->nm_kriteria }} - {{ $item->himpunan->nm_himpunan }}
                                            </option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
