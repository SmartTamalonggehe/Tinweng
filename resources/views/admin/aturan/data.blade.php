<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Aturan</th>
            <th>IF</th>
            @for ($i = 2; $i < $kriteria->count(); $i++)
                <th>AND</th>
                @endfor
                <th>THEN</th>
                <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($aturan->keyBy('kelompok') as $itemAturan)
        <tr>
            <td>R1</td>
            @foreach ($aturan->sortBy('nilaiKriteria.kriteria.jenis') as
            $item)
            @if ($itemAturan->kelompok===$item->kelompok)
            <td>{{ $item->nilaiKriteria->kriteria->nm_kriteria }}= {{ $item->nilaiKriteria->himpunan->nm_himpunan }}
            </td>
            @endif
            @endforeach
            <td>
                <button data-id="{{ $item->id }}" class="btnUbah btn btn-warning">Ubah</button>
                <button data-id="{{ $item->id }}" class="btnHapus btn btn-danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@foreach ($nilai_kriteria as $item)

@endforeach

<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
{{-- My Script --}}

<script src="{{ asset('my_js/delete_data.js') }}"></script>
<script src="{{ asset('my_js/edit_data.js') }}"></script>
