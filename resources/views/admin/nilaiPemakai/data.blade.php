<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemakai</th>
            @foreach ($kriteria as $item)
            <th>Kriteria</th>
            <th>Nilai</th>
            @endforeach
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($nilaiPemakai->keyBy('pemakai.id') as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->pemakai->nm_pemakai }}</td>
            @foreach ($nilaiPemakai as $itemKriteria)
            @if ($item->pemakai->id===$itemKriteria->pemakai->id)
            <td>{{ $itemKriteria->kriteria->nm_kriteria }}</td>
            <td>{{ $itemKriteria->bobot_pemakai }}</td>
            @endif
            @endforeach
            <td>
                {{-- <button data-id="{{ $item->id }}" class="btnUbah btn btn-warning">Ubah</button> --}}
                <button data-id="{{ $item->pemakai->id }}" class="btnHapus btn btn-danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
{{-- <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script> --}}
{{-- My Script --}}

<script src="{{ asset('my_js/delete_data.js') }}"></script>
<script src="{{ asset('my_js/edit_data.js') }}"></script>

<script>
    $('#datatable').dataTable({
        responsive:true,
    })

</script>
