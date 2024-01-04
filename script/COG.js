function generatePDFCOG(){
    const element = document.getElementById("content");
    var opt = {
        margin: [1,1],
        filename: 'Certificate.pdf',
        html2canvas:  { width: 900, height: 1200,},
        jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
      };
  
      html2pdf().set(opt).from(element).save();
  
  }
  