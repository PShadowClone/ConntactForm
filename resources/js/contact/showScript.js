const table = $('#contact-table') // table reference
const DATATABLE_ROUTE = 'http://localhost:8000/contact/fill'; // this url show all messages by using ajax
/**
 *
 * fill datatable after page loading
 *
 */
$(document).ready(function () {
    /*
     * fill datatable
     */
    table.DataTable({
        "ajax": {
            "url": DATATABLE_ROUTE,
            "type": "GET",
        },
        "columns": [
            {"data": "name"},
            {"data": "email"},
            {"data": "subject"},
            {"data": "message"},
        ]
    })
})
