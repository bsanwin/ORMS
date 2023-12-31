<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table Quick Edit</title>
    <link href="tablequickedit/css/bootstrap.css" rel="stylesheet"/>
    <link href="tablequickedit/css/font-awesome.css" rel="stylesheet"/>
</head>
<body onload="viewData()">

    <div class="container" style="margin-top:35px">
        <h4>Table Quick Edit</h4>

      <table id="tabledit" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Subject ID</th>
                    <th>Repeating</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <script src="tablequickedit/js/jquery.min.js"></script>
    <script src="tablequickedit/js/bootstrap.js"></script>
    <script src="tablequickedit/js/jquery.tabledit.js"></script>
    <script>
    function viewData(){
        $.ajax({
            url: 'process.php?p=view',
            method: 'GET'
        }).done(function(data){
            $('tbody').html(data)
            tableData()
        })
    }

    function tableData(){
        $('#tabledit').Tabledit({
            url: 'action.php',
            eventType: 'dblclick',
            editButton: true,

            hideIdentifier: false,
            buttons: {
                edit: {
                    class: 'btn btn-sm btn-warning',
                    html: '<span class="glyphicon glyphicon-pencil"></span> Edit',
                    action: 'edit'
                },

                save: {
                    class: 'btn btn-sm btn-success',
                    html: 'Save'
                },
                delete: {
                    class: 'btn btn-sm btn-danger',
                    html: '<span class="glyphicon glyphicon-trash"></span> Trash',
                    action: 'delete'
                },
                save: {
                    class: 'btn btn-sm btn-success',
                    html: 'Save'
                },

                confirm: {
                    class: 'btn btn-sm btn-default',
                    html: 'Confirm'
                }

            },
            columns: {
                identifier: [0, 'stu_id'],
                editable: [[3, 'garde']],
            },
            onSuccess: function(data, textStatus, jqXHR) {
                viewData()
            },
            onFail: function(jqXHR, textStatus, errorThrown) {
                console.log('onFail(jqXHR, textStatus, errorThrown)');
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
            onAjax: function(action, serialize) {
                console.log('onAjax(action, serialize)');
                console.log(action);
                console.log(serialize);
            }
        });
    }
    </script>
</body>
</html>
