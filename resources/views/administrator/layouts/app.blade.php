@extends('administrator.layouts.base')

@section('app')


@yield('main')


<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- footer  -->
<script src="{{ asset('administrator/assets/js/jquery-3.4.1.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('administrator/assets/js/popper.min.js') }}"></script>
<!-- bootstarp js -->
<script src="{{ asset('administrator/assets/js/bootstrap.min.js') }}"></script>
<!-- sidebar menu  -->
<script src="{{ asset('administrator/assets/js/metisMenu.js') }}"></script>
<!-- waypoints js -->
<script src="{{ asset('administrator/assets/vendors/count_up/jquery.waypoints.min.js') }}"></script>
<!-- waypoints js -->
<script src="{{ asset('administrator/assets/vendors/chartlist/Chart.min.js') }}"></script>
<!-- counterup js -->
<script src="{{ asset('administrator/assets/vendors/count_up/jquery.counterup.min.js') }}"></script>

<!-- Dropify -->
<script src="{{ asset('administrator/assets/dist/dropify/js/dropify.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>

<!-- nice select -->
<script src="{{ asset('administrator/assets/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('administrator/assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

<!-- responsive table -->
<script src="{{ asset('administrator/assets/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datatable/js/buttons.print.min.js') }}"></script>

<!-- datepicker  -->
<script src="{{ asset('administrator/assets/vendors/datepicker/datepicker.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datepicker/datepicker.en.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/datepicker/datepicker.custom.js') }}"></script>

<script src="{{ asset('administrator/assets/js/chart.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/chartjs/roundedBar.min.js') }}"></script>

<!-- progressbar js -->
<script src="{{ asset('administrator/assets/vendors/progressbar/jquery.barfiller.js') }}"></script>
<!-- tag input -->
<script src="{{ asset('administrator/assets/vendors/tagsinput/tagsinput.js') }}"></script>
<!-- text editor js -->
<script src="{{ asset('administrator/assets/vendors/text_editor/summernote-bs4.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/am_chart/amcharts.js') }}"></script>

<script src="{{ asset('administrator/assets/dist/ckeditor/ckeditor.min.js')}}"></script>

<!-- scrollabe  -->
<script src="{{ asset('administrator/assets/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/scroll/scrollable-custom.js') }}"></script>

<!-- vector map  -->
<script src="{{ asset('administrator/assets/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

<!-- apex chrat  -->
<script src="{{ asset('administrator/assets/vendors/apex_chart/apex-chart2.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/apex_chart/apex_dashboard.js') }}"></script>

<script src="{{ asset('administrator/assets/vendors/echart/echarts.min.js') }}"></script>


<script src="{{ asset('administrator/assets/vendors/chart_am/core.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/chart_am/charts.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/chart_am/animated.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/chart_am/kelly.js') }}"></script>
<script src="{{ asset('administrator/assets/vendors/chart_am/chart-custom.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('administrator/assets/js/dashboard_init.js') }}"></script>
<script src="{{ asset('administrator/assets/js/custom.js') }}"></script>


<script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element){
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>

<script>

    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                ]
            }
        } )
        .catch( error => {
            console.log( error );
        } );

</script>

@endsection()
