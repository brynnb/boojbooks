require('./bootstrap');
var tablesort = require('tablesort');

$(document).ready(function () {

    var bookTable = document.getElementById('books-table');
    if (bookTable) {
        tablesort(bookTable);
    }

    var csrfToken = $('meta[name="csrfToken"]').attr('content');

    jQuery.ajaxSetup({headers: {'X-CSRF-Token': $('meta[name=csrfToken]').attr('content')}});


    $('.delete-book').on('click', function () {

        var id = $(this).data('id');

        var _this = $(this);

        console.log($(this).data('id'));
        //
        // swal({
        //     title: "Delete " + capitalizeFirstLetter(type) + "?",
        //     text: "You will not be able to recover this " + type + "!",
        //     type: "warning",
        //     showCancelButton: true,
        //     confirmButtonColor: "#DD6B55",
        //     confirmButtonText: "Yes, delete it!",
        //     closeOnConfirm: false,
        //     html: false
        // }, function(){
        //     $.ajax({
        //         url: '/' + type + '/' + id,
        //         type: 'post',
        //         data: {_method: 'delete', _token: csrfToken},
        //         success: function () {
        //             _this.parent().parent().parent().fadeOut(); //TODO: make this more versatile
        //             swal("Deleted!",
        //                 "Your " + type + " has been deleted.",
        //                 "success");
        //             var slotsPrev = $('#slotsUsed').html();
        //             $('#slotsUsed').html(slotsPrev - 1);
        //         },
        //         error: function (){
        //             swal("Error!",
        //                 "There was a problem deleting your " + type + ".",
        //                 "error");
        //         }
        //     });
        //
        // });

    });

});