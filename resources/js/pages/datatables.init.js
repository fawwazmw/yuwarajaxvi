/*
Template Name: Adminto - Responsive Bootstrap 5 Admin Dashboard
Author: CoderThemes
Version: 2.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Datatable init js
*/


import DataTable from "datatables.net";

$.fn.DataTable = DataTable;

jQuery(document).ready(function () {

    // Default Datatable
    $('#datatable').DataTable();
    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false, buttons: ['copy', 'excel', 'pdf']
    });

    // Key Tables

    $('#key-table').DataTable({
        keys: true
    });

    // // Responsive Datatable
    $('#responsive-datatable').DataTable();

    // Multi Selection Datatable
    $('#selection-datatable').DataTable({
        select: {
            style: 'multi'
        }
    });


});
