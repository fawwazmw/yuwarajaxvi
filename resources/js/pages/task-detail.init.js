/*
Template Name: Adminto - Responsive Bootstrap 5 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Tablesaw tables init js
*/


import 'selectize/dist/js/standalone/selectize.min.js';
import 'dropzone/dist/dropzone.js';
// import 'multiselect/dist/js/jquery.multi-select.js';
// import 'select2/dist/js/select2.full.min.js';
import 'selectize/dist/js/selectize.min.js'
import 'selectize/dist/js/standalone/selectize.min.js'


    $('.selectize-close-btn').selectize({
        plugins: ['remove_button'],
        persist: false,
        create: true,

        render: {
            item: function(data, escape) {
                return '<div>"' + escape(data.text) + '"</div>';
            }
        }
        // onDelete: function(values) {
        //     return confirm(values.length > 1 ? 'Are you sure you want to remove these ' + values.length + ' items?' : 'Are you sure you want to remove "' + values[0] + '"?');
        // }
    });




