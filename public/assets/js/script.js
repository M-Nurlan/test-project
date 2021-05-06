$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.load-more', function (e) {
        var company = $(this).data('company');
        var parent = $(this).parent();
        $.ajax({
            type: 'POST',
            url: '/get_branches',
            data: {
                company: company,
            },
            success: function success(data) {
                var branches = '';
                data.branches.forEach(function (value, key) {
                    branches += "<li><div>" + value.branch_name + "</div><div class='description_hide' style='display: none'>" + value.description + "</div><div class='workers'><button data-branch='" + value.id +"' class='load_workers'>Подробнее</button><ul></ul></div></li><hr>";
                });
                parent.find('ul').empty();
                parent.find('ul').append(branches);
            }
        });
    })

    $(document).on('click', '.load_workers', function (e) {
        var branch = $(this).data('branch');
        var parent = $(this).parent();
        parent.prev().show('fast');
        $.ajax({
            type: 'POST',
            url: '/get_workers',
            data: {
                branch: branch,
            },
            success: function success(data) {
                var workers = '';
                data.workers.forEach(function (value, key) {
                    workers += "<li><div>" + value.name + "</div><div>" + value.rank.rank_name + "</div></li><hr>";
                });
                parent.find('ul').empty();
                parent.find('ul').append(workers);
            }
        });
    })
})