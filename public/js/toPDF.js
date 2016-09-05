var pdf = new jsPDF('p', 'pt', 'letter'); 
var source = $('#fromHTMLtestdiv')[0];

margins = {
    top: 80,
    bottom: 60,
    left: 40,
    width: 522
};
// all coords and widths are in jsPDF instance's declared units
// 'inches' in this case
pdf.fromHTML(
        source // HTML string or DOM elem ref.
        , margins.left // x coord
        , margins.top // y coord
        , {
            'width': margins.width // max width of content on PDF
            , 'elementHandlers': specialElementHandlers
        },
        function (dispose) {
            // dispose: object with X, Y of the last line add to the PDF
            //          this allow the insertion of new lines after html
            pdf.save('Test.pdf');
        },
        margins
        )
