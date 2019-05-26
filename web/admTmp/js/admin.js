$(document).ready(function () {
   $('.sidebar .nav-item').on('click', function () {
       if ($(this).hasClass('active')) {
           if ($(this).find('.treeview-menu').css('display') === 'block') {
               $(this).find('.treeview-menu').hide();
           } else {
               $(this).find('.treeview-menu').show();
           }
       } else {
           $('.nav-item').each(function (i, e) {
               if ($(this).hasClass('active')) {
                   $(this).removeClass('active');
               }
               if ($(this).hasClass('treeview')) {
                   if ($(this).find('.treeview-menu').css('display') === 'block') {
                       $(this).find('.treeview-menu').hide();
                   }
               }
           });
           $(this).addClass('active');
       }
   });
    <!-- javascript for init -->
    $('.datetimepicker').datetimepicker({
        format:'YYYY-MM-DD HH:mm:ss',
        locale: 'ru',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
    });
    // FileInput
    $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
        $(this).parent().parent().find('.inputFileHidden').trigger('click');
        $(this).parent().parent().addClass('is-focused');
    });
    $('.form-file-multiple .inputFileHidden').change(function() {
        var names = '';
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            if (i < $(this).get(0).files.length - 1) {
                names += $(this).get(0).files.item(i).name + ',';
            } else {
                names += $(this).get(0).files.item(i).name;
            }
        }
        $(this).siblings('.input-group').find('.inputFileVisible').val(names);
    });
    $('.form-file-multiple .btn').on('focus', function() {
        $(this).parent().siblings().trigger('focus');
    });
    $('.form-file-multiple .btn').on('focusout', function() {
        $(this).parent().siblings().trigger('focusout');
    });
    //checked filter category
    $('.filter-check').on('change', function () {
        if ($(this).prop('checked')) {
            $.ajax({
                url: '/admin/categories/filter/?action=set&id='+$(this).attr('data-id'),
                complete: function () {
                    console.log(true);
                }
            });
        } else {
            $.ajax({
                url: '/admin/categories/filter/?action=unset&id='+$(this).attr('data-id'),
                complete: function () {
                    console.log(true);
                }
            });
        }
    });
});