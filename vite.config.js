import {defineConfig} from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    // define:{
    //     global: {},
    // },
    plugins: [

        laravel([
            // Theme css
            "resources/css/app.css",
            "resources/scss/app.scss",
            "resources/scss/icons.scss",

            // Theme js
            "resources/js/app.js",
            "resources/js/head.js",
            "resources/js/layout.js",

            // External css
            "resources/js/pages/dashboard.init.js",
            "node_modules/fullcalendar/main.min.css",
            "node_modules/quill/dist/quill.core.css",
            "node_modules/quill/dist/quill.snow.css",
            "node_modules/custombox/dist/custombox.min.css",
            "node_modules/dropzone/dist/min/dropzone.min.css",
            "node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css",
            "node_modules/multiselect/css/multi-select.css",
            "node_modules/select2/dist/css/select2.css",
            "node_modules/selectize/dist/css/selectize.bootstrap3.css",
            "node_modules/sweetalert2/dist/sweetalert2.min.css",
            "node_modules/hopscotch/dist/css/hopscotch.min.css",
            "node_modules/toastr/build/toastr.min.css",
            'node_modules/mohithg-switchery/dist/switchery.min.css',
            "node_modules/multiselect/css/multi-select.css",
            "node_modules/select2/dist/css/select2.css",
            "node_modules/selectize/dist/css/selectize.bootstrap3.css",
            "node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css",
            "node_modules/quill/dist/quill.core.css",
            "node_modules/quill/dist/quill.bubble.css",
            "node_modules/quill/dist/quill.snow.css",
            "node_modules/spectrum-colorpicker2/dist/spectrum.min.css",
            "node_modules/flatpickr/dist/flatpickr.min.css",
            "node_modules/clockpicker/dist/bootstrap-clockpicker.min.css",
            "node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
            "node_modules/dropify/dist/css/dropify.min.css",
            "node_modules/datatables.net-bs5/css/dataTables.bootstrap5.css",
            "node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.css",
            "node_modules/datatables.net-buttons-bs5/css/buttons.bootstrap5.css",
            "node_modules/datatables.net-select-bs5/css/select.bootstrap5.css",
            "node_modules/admin-resources/rwd-table/rwd-table.min.css",
            "node_modules/tablesaw/dist/tablesaw.css",
            "node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css",

            // js
            "resources/js/pages/calendar.init.js",
            "resources/js/pages/inbox.js",
            "resources/js/pages/kanban.init.js",
            "resources/js/pages/task-detail.init.js",
            "resources/js/pages/coming-soon.init.js",
            "node_modules/jquery-toast-plugin/dist/jquery.toast.min.js",
            "resources/js/pages/tooltip.init.js",
            "resources/js/pages/range-sliders.init.js",
            "resources/js/pages/sweet-alerts.init.js",
            "resources/js/pages/widgets.init.js",
            "resources/js/pages/draggable.init.js",
            "resources/js/pages/tour.init.js",
            "resources/js/pages/toastr.init.js",
            "resources/js/pages/materialdesign.init.js",
            "resources/js/pages/fontawesome.init.js",
            "resources/js/pages/form-advanced.init.js",
            "resources/js/pages/form-wizard.init.js",
            "resources/js/pages/form-quilljs.init.js",
            "resources/js/pages/form-pickers.init.js",
            "resources/js/pages/form-fileuploads.init.js",
            "resources/js/pages/tabledit.init.js",
            "resources/js/pages/datatables.init.js",
            "resources/js/pages/responsive-table.init.js",
            "resources/js/pages/tablesaw.init.js",
            "resources/js/pages/flot.init.js",
            "resources/js/pages/morris.init.js",
            "resources/js/pages/chartjs.init.js",
            "resources/js/pages/sparkline.init.js",
            "resources/js/pages/google-maps.init.js",
            "resources/js/pages/vector-maps.init.js"
        ]),
    ],

});
