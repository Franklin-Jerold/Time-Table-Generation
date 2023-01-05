window.onload = function () {
    document.getElementById("download").addEventListener("click", () => {

        const bodyprint = this.document.getElementById("body");
        console.log(bodyprint);
        console.log(window);
        var opt = {
            margin: 0,
            filename: 'Time-Table.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
        };

        html2pdf().from(bodyprint).set(opt).save();


    })
}