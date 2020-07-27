         <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                2020 &copy; WITED
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script type="module" src="assets/ckeditor/build/ckeditor.js"></script>
      
        <!-- <script src="https://ckeditor.com/apps/ckfinder/3.5.0/ckfinder.js"></script> -->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <!-- <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/inline/ckeditor.js"></script> -->
          <!-- Plugins js -->
        <script src="assets/libs/katex/katex.min.js"></script>
        <!-- <script src="assets/libs/quill/quill.min.js"></script> -->

      
        <script src="assets/js/pages/dashboard-2.init.js"></script>
        <script src="assets/js/pages/datatables.init.js"></script>
         <!-- Init js-->
        <!-- <script src="assets/js/pages/form-quilljs.init.js"></script> -->

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script type="text/javascript">
            $(function(){
           ClassicEditor
            .create( document.querySelector( '#editor' ),{

                toolbar: [ 'heading', '|', "fontColor","fontFamily","fontSize",'bold', 'italic', 'link','bulletedList', 'numberedList',"alignment",'horizontalline', 'blockQuote', "selectAll", "undo", "redo", "imageTextAlternative", "imageUpload", "imageStyle:full", "imageStyle:side", "indent", "outdent", "link", "mediaEmbed", "insertTable","code","codeBlock"],   
            })

            .then( editor => {
                // console.log(Array.from( editor.ui.componentFactory.names() ));
    } )
            .catch( error => {
                console.error( error );
            } );
            })
        </script>
        
    </body>
</html>