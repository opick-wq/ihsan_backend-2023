const ShowDownload = (result) => {
    return new Promise ((resolve) =>{
        const Hasil =`Download Selesai,
Hasil Download: ${result}`;
        resolve(Hasil)
    });
};

const download = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            const result = `windows-10.exe`;
            resolve(result);
        }, 3000);
    });
}


download()
    .then(result => ShowDownload(result))
    .then(res => {
        console.log(res);
    })
    .catch(error => {
        console.error(error);
    });