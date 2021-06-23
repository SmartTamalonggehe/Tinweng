<div id="grafik"></div>
<div id="MathJax-script"></div>


<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
{{-- My Script --}}

<script src="{{ asset('my_js/delete_data.js') }}"></script>
<script src="{{ asset('my_js/edit_data.js') }}"></script>

<script src="{{ asset('my_js/grafik.js') }}"></script>
<script src="{{ asset('my_js/perhitungan.js') }}"></script>

<script>
    MathJax = {
    loader: {
      load: [
        'input/tex-base', '[tex]/newcommand', '[tex]/action',
        'output/chtml',
        'a11y/explorer'
      ]
    },
    tex: {
      inlineMath: [['$', '$'], ['\\(', '\\)']],
      packages: ['base', 'newcommand', 'action'],

    }
  };
</script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/startup.js"></script>
