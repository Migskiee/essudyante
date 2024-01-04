function generatePDF(){
    const element = document.getElementById("content");
    var opt = {
        margin: [1,1],
        filename: 'essudyante.pdf',
        html2canvas:  { width: 1250, height: 1200,},
        jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
      };

      html2pdf().set(opt).from(element).save();

}



function generatePDF2(){
  const element = document.getElementById("content");
  var opt = {
      margin: [1,1],
      filename: 'essudyante.pdf',
      html2canvas:  { width: 1100, height: 700,},
      jsPDF:        { unit: 'in', format: 'a4', orientation: 'landscape' }
    };

    html2pdf().set(opt).from(element).save();

}



