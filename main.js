//Define Global DOM Variable
let previewNode = document.querySelector("#template");
previewNode.id = "";
let previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);
let dropzoneContent = document.querySelector("#my-dropzone-content");


// Fungsi untuk mengambil time stamp
function getCurrentDate() {
    let today = new Date();
    let dd = String(today.getDate()).padStart(2, '0');
    let mm = String(today.getMonth() + 1).padStart(2, '0');
    let yyyy = String(today.getFullYear());
    let hour = String(today.getHours());
    let minute = String(today.getMinutes());
    let second = String(today.getSeconds());

    let timestamp = yyyy + mm + dd + hour + minute + second;
    return timestamp;
}

// Dropzone Configuration Options
let myZone = new Dropzone("div#my-dropzone", {
    url: "upload.php",
    acceptedFiles: ".xlsx, .xls, .csv, .ods",
    clickable: "#fileinput-button",
    paramName: "file",
    maxFileSize: 5,
    maxFiles: 1,
    renameFile: function (file) {
        let fileExt = file.name.split('.')[1];
        return getCurrentDate() + '.' + fileExt;
    }
});

//Event Listener untuk menampilkan progresbar upload 
myZone.on("addedfile", function(file) {
    file.previewTemplate.innerHTML = `
    <div class="preloader-wrapper small active">
        <div class="spinner-layer spinner-black-only">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div><div class="gap-patch">
            <div class="circle"></div>
        </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
        </div>
    </div>`;
});

//Event Listener when upload Success and upload.php return array result
myZone.on("success", function(file, res) {
    myZone.disable();
    //Override Preview Template dengan HTML kosong
    file.previewTemplate.innerHTML = "";
    
    console.log("Ini file : " + file);
    console.log("Ini response : " + res);

    //Proses data untuk ditampilkan dalam table
    let arrayResult = JSON.parse(res);
    let tablePreview = document.getElementById("tableData");
    arrayResult.forEach((dataRow, index) => {
        let row = tablePreview.insertRow();
        dataRow.forEach(dataCol => {
            let col = row.insertCell();
            col.appendChild(document.createTextNode(dataCol));
            col.setAttribute("style", "padding: 10px 30px;")
        });
    });

    //Kosongkan DOM dengan id my-dropzone-content 
    let dropzoneContent = document.querySelector("#my-dropzone-content");
    dropzoneContent.innerHTML = "";

    //Isi dengan button lanjut dan batal
    dropzoneContent.appendChild(previewNode);

    //Lakukan reload saat tombol dengan id batal diklik
    document.getElementById("batal").onclick = function() {
        window.location.reload();
    }

    //Pindah page saat tombol dengan id lanjut diklik
    document.getElementById("lanjut").onclick = function() {
        window.location.href = "lanjut.php";
    }

});


