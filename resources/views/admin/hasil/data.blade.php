{{-- tampil data pemakai --}}
<h4 class="title text-center"> Data Pemakai</h4>
<table id="datatable" class="datatable table table-striped table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pemakai</th>
            @foreach ($nilai_kriteria->keyBy('kriteria_id') as $item)
                <th>{{ $item->kriteria->nm_kriteria }}</th>
            @endforeach
        </tr>
    </thead>

    <tbody>
        @foreach ($pemakai as $item_pemakai)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item_pemakai->nm_pemakai }}</td>
                @foreach ($nilai_pemakai as $item)
                    @if ($item_pemakai->id === $item->pemakai_id)
                        <td>{{ $item->bobot_pemakai }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>


{{-- Tampil Perhitungan Variabel --}}
<hr>
<h4 class=" title mt-4 text-center mb-4"> Pendefinisian Variabel</h4>
<table class="table table-striped table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            {{-- <th>No</th> --}}
            <th>Nama Pemakai</th>
            @foreach ($nilai_kriteria->keyBy('kriteria_id') as $item)
                <th>{{ $item->kriteria->nm_kriteria }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody id="definisiVariabel"">

    </tbody>
</table>


<hr>
<h4 class=" title mt-4 text-center mb-4"> Inferensi</h4>

        <div>
            <p id="inferensi"></p>
        </div>
        <h4 class=" title mt-4 text-center mb-4">Defuzifikasi</h4>
        <form id="formKu" method="post">
            @csrf
            <div>
                <p id="defuzifikasi"></p>
            </div>
        </form>

        <script src=" {{ URL::asset('/assets/libs/datatables/datatables.min.js') }}">
        </script>
        <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        {{-- My Script --}}

        <script src="{{ asset('my_js/delete_data.js') }}"></script>
        <script src="{{ asset('my_js/edit_data.js') }}"></script>
        <script src="{{ asset('my_js/definisi_variabel.js') }}"></script>

        <script>
            $('.datatable').dataTable({
                responsive: true,
            })
        </script>
