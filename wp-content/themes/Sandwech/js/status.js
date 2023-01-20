var $ = jQuery;

$(window).on('load', function () {
    var editor = new $.fn.dataTable.Editor({
        ajax: "../EditorPHP/controllers/status.php",
        table: "#status",
        fields: [
            {
                label: "Description:",
                name: "description"
            }
        ]
    });

    $('#status').DataTable({
        dom: "Bfrtip",
        lengthChange: false,
        ajax: "../EditorPHP/controllers/status.php",
        columns: [
            {
                data: "ID"
            },
            {
                data: "description"
            }
        ],
        select: true,
        buttons: [{
            extend: "create",
            editor: editor
        },
        {
            extend: "edit",
            editor: editor
        },
        {
            extend: "remove",
            editor: editor
        },
        {
            extend: "collection",
            text: "Export",
            buttons: [
                "copy",
                "excel",
                "csv",
                "pdf",
                "print"
            ]
        }
        ]
    });
});


