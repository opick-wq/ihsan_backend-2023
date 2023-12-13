const showDownload = result => {
    console.log("Download Selesai");
    console.log("Hasil Download: " + result);
};

const download = () => {
    return new Promise(resolve => {
        setTimeout(() => {
            const result = "windows-10.exe";
            resolve(result);
        }, 3000);
    });
};

const runDownload = async () => {
    try {
        const result = await download();
        showDownload(result);
    } catch (error) {
        console.error("Error: ", error);
    }
};

runDownload();
