function showDownload(result) {
    console.log("Download Selesai");
    console.log("Hasil Download: " + result);
}


function download() {
    return new Promise(resolve => {
        setTimeout(function () {
            const result = "windows-10.exe";
            resolve(result);
        }, 3000);
    });
}


download()
    .then(result => showDownload(result))
    .catch(error => console.error("Error: ", error));