<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kriteria</th>
            <th>Operator</th>
            <th>Bobot</th>
            <th>Himpunan</th>
            <th>Metode</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($nilaiKriteria as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kriteria->nm_kriteria }}</td>
            <td>{{ $item->operator }}</td>
            <td>{{ $item->bobot_kriteria }}</td>
            <td>{{ $item->himpunan->nm_himpunan }}</td>
            <td>{{ $item->metode }}</td>
            <td>
                <button data-id="{{ $item->id }}" class="btnUbah btn btn-warning">Ubah</button>
                <button data-id="{{ $item->id }}" class="btnHapus btn btn-danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
{{-- My Script --}}

<script src="{{ asset('my_js/delete_data.js') }}"></script>
<script src="{{ asset('my_js/edit_data.js') }}"></script>
