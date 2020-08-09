function isIEPreVer9() { var v = navigator.appVersion.match(/MSIE ([\d.]+)/i); return (v ? v[1] < 9 : false); }

var dataView;
var grid;
var data = [];
var columns = [
    {id: "sel", name: "#", field: "num", behavior: "select", cssClass: "cell-selection", width: 20, cannotTriggerInsert: true, resizable: false, selectable: false, excludeFromColumnPicker: true, sortable: true },
    {id: "fullname", name: "Full Name", field: "fullname", width: 130, minWidth: 130, cssClass: "cell-title", editor: Slick.Editors.Text, validator: requiredFieldValidator, resizable: true,sortable: true},
    {id: "passportno", name: "Passport No.", field: "passportno", width: 80, minWidth: 80, cssClass: "cell-title", editor: Slick.Editors.Text, validator: requiredFieldValidator, resizable: true, sortable: true},
    {id: "issuingcountry", name: "Issuing Country", field: "issuingcountry", width: 80, minWidth: 80, formatter: Select2Formatter, editor: Select2Editor, dataSource: countryIsoAndNameList},
    {id: "dob", name: "Date of Birth", field: "dob", minWidth: 60, editor: Slick.Editors.Date, sortable: true},
    {id: "gender", name: "Gender", field: "gender", minWidth: 60, options: "Male,Female", editor: SelectCellEditor}
];

var options = {
    columnPicker: {
        columnTitle: "Columns",
        hideForceFitButton: false,
        hideSyncResizeButton: false,
        forceFitTitle: "Force fit columns",
        syncResizeTitle: "Synchronous resize",
    },
    editable: true,
    enableAddRow: false,
    enableCellNavigation: true,
    asyncEditorLoading: true,
    forceFitColumns: true,
    topPanelHeight: 25
};

var sortcol = "sel";
var sortdir = 1;
var percentCompleteThreshold = 0;
var searchString = "";

function requiredFieldValidator(value) {
    if (value == null || value == undefined || !value.length) {
        return {valid: false, msg: "This is a required field"};
    } else {
        return {valid: true, msg: null};
    }
}

function percentCompleteSort(a, b) {
    return a["percentComplete"] - b["percentComplete"];
}

function comparer(a, b) {
    var x = a[sortcol], y = b[sortcol];
    return (x == y ? 0 : (x > y ? 1 : -1));
}

function toggleFilterRow() {
    grid.setTopPanelVisibility(!grid.getOptions().showTopPanel);
}

$(".grid-header .ui-icon")
    .addClass("ui-state-default ui-corner-all")
    .mouseover(function (e) {
        $(e.target).addClass("ui-state-hover")
    })
    .mouseout(function (e) {
        $(e.target).removeClass("ui-state-hover")
});

function setPassenger(count){
    data = [];

    for (var i = 0; i < count; i++) {
        var d = (data[i] = {});

        d["id"] = "id_" + i;
        d["num"] = i+1;
    }

    dataView.beginUpdate();
    dataView.setItems(data);
    dataView.endUpdate();
    dataView.refresh();

    grid = new Slick.Grid("#myGrid", dataView, columns, options);
    grid.updateRowCount();
    grid.render();
}

$(function () {
    // prepare the data
    for (var i = 0; i < 1; i++) {
        var d = (data[i] = {});

        d["id"] = "id_" + i;
        d["num"] = i+1;
    }

    dataView = new Slick.Data.DataView({ inlineFilters: true });
    grid = new Slick.Grid("#myGrid", dataView, columns, options);
    grid.setSelectionModel(new Slick.RowSelectionModel());

    var pager = new Slick.Controls.Pager(dataView, grid, $("#pager"));
    var columnpicker = new Slick.Controls.ColumnPicker(columns, grid, options);

    grid.onCellChange.subscribe(function (e, args) {
        dataView.updateItem(args.item.id, args.item);
    });

    grid.onKeyDown.subscribe(function (e) {
        // select all rows on ctrl-a
        if (e.which != 65 || !e.ctrlKey) {
            return false;
        }

        var rows = [];
        for (var i = 0; i < dataView.getLength(); i++) {
            rows.push(i);
        }

        grid.setSelectedRows(rows);
        e.preventDefault();
    });

    grid.onSort.subscribe(function (e, args) {
        sortdir = args.sortAsc ? 1 : -1;
        sortcol = args.sortCol.field;

        if (isIEPreVer9()) {
            // using temporary Object.prototype.toString override
            // more limited and does lexicographic sort only by default, but can be much faster

            var percentCompleteValueFn = function () {
                var val = this["percentComplete"];
                if (val < 10) {
                    return "00" + val;
                } else if (val < 100) {
                    return "0" + val;
                } else {
                    return val;
                }
            };

            // use numeric sort of % and lexicographic for everything else
            dataView.fastSort((sortcol == "percentComplete") ? percentCompleteValueFn : sortcol, args.sortAsc);
        } else {
            // using native sort with comparer
            // preferred method but can be very slow in IE with huge datasets
            dataView.sort(comparer, args.sortAsc);
        }
    });

    // wire up model events to drive the grid
    // !! both dataView.onRowCountChanged and dataView.onRowsChanged MUST be wired to correctly update the grid
    // see Issue#91
    dataView.onRowCountChanged.subscribe(function (e, args) {
        grid.updateRowCount();
        grid.render();
    });

    dataView.onRowsChanged.subscribe(function (e, args) {
        grid.invalidateRows(args.rows);
        grid.render();
    });

    dataView.onPagingInfoChanged.subscribe(function (e, pagingInfo) {
        grid.updatePagingStatusFromView( pagingInfo );

        // show the pagingInfo but remove the dataView from the object, just for the Cypress E2E test
        delete pagingInfo.dataView;
        // console.log('on After Paging Info Changed - New Paging:: ', pagingInfo);
    });

    dataView.onBeforePagingInfoChanged.subscribe(function (e, previousPagingInfo) {
        // show the previous pagingInfo but remove the dataView from the object, just for the Cypress E2E test
        delete previousPagingInfo.dataView;
        // console.log('on Before Paging Info Changed - Previous Paging:: ', previousPagingInfo);
    });

    // initialize the model after all the events have been hooked up
    dataView.beginUpdate();
    dataView.setItems(data);
    dataView.endUpdate();

    // if you don't want the items that are not visible (due to being filtered out
    // or being on a different page) to stay selected, pass 'false' to the second arg
    dataView.syncGridSelection(grid, true);

    $("#gridContainer").resizable();
});