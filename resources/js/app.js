require('./bootstrap');
var tablesort = require('tablesort');
var swal = require('sweetalert');

$(document).ready(function () {

    var bookTable = document.getElementById('books-table');
    if (bookTable) {
        tablesort(bookTable);
    }

    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    $('.delete-book').on('click', function () {

        var id = $(this).data('id');
        var _this = $(this);

        swal({
                title: "Delete this book?",
                buttons: {
                    cancel: {
                        text: "Cancel",
                        visible: true,
                        closeModal: true,
                    },
                    confirm: {
                        text: "Delete",
                        closeModal: true
                    }
                }
            }
        ).then(value => {
            if (!value) throw null;

            $.ajax({
                url: '/books/' + id,
                type: 'post',
                data: {_method: 'delete', _token: csrfToken},
                success: function () {
                    swal("Deleted!",
                        "The book has been deleted.",
                        "success").then(value => {
                        location.reload();
                    });
                },
                error: function () {
                    throw new Error('Deletion failed');
                }
            });

        }).catch(err => {
            if (err) {
                swal("Deletion Failed", "The request failed!", "error");
            } else {
                swal.stopLoading();
                swal.close();
            }
        });

    });

});