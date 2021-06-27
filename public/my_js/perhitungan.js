async function tampilPerhitungan() {
    let kriteria = await ambilKriteria();

    kriteria.forEach(function(value, index) {
        value.nilai_kriteria.forEach(function(item, key) {
            if (item.metode === "Himpunan") {
                if (item.himpunan.nm_himpunan === "Rendah") {
                    rendah = item.himpunan.bobot_himpunan;
                }
                if (item.himpunan.nm_himpunan === "Sedang") {
                    sedang = item.himpunan.bobot_himpunan;
                }
                if (item.himpunan.nm_himpunan === "Tinggi") {
                    tinggi = item.himpunan.bobot_himpunan;
                }
            } else {
                if (item.himpunan.nm_himpunan === "Rendah") {
                    rendah = item.bobot_kriteria;
                }
                if (item.himpunan.nm_himpunan === "Sedang") {
                    sedang = item.bobot_kriteria;
                }
                if (item.himpunan.nm_himpunan === "Tinggi") {
                    tinggi = item.bobot_kriteria;
                }
            }
        });
        perhitunganVariabelRendah(index, rendah, sedang, tinggi);
        if (value.jenis !== "Z") {
            perhitunganVariabelSedang(index, rendah, sedang, tinggi);
        }
        perhitunganVariabelTinggi(index, rendah, sedang, tinggi);
    });
}

tampilPerhitungan();

function perhitunganVariabelRendah(index, rendah = 1, sedang = 2, tinggi = 3) {
    let rumus1 =
        "$${X {-" + rendah + "} \\over " + sedang + "-" + rendah + "}.$$";
    let isi = `
            <h4 class="mb-4">Variabel Rendah</h4>
            <div class="container-rumus">
            <p class="u">$$u Rendah =$$</p>
                    <div class="rumus">
                        <p class="rendah">1</p>
                        <p class="sedang1" style=top:30px>${rumus1}</p>
                        <p class="tinggi">0</p>
                    </div>
                </div>


                <div class="container-rumus">
                    <div class="rumus">
                        <p class="rendah">1</p>
                        <p class="sedang1" style="top:40px; font-size:15px">$$ ${rendah} <= X <= ${sedang} $$</p>
                        <p class="tinggi">0</p>
                    </div>
                </div>
    `;

    document.getElementById(`variabel${index}`).innerHTML += isi;
}
function perhitunganVariabelSedang(index, rendah = 1, sedang = 2, tinggi = 3) {
    let rumus1 =
        "$${X {-" + rendah + "} \\over " + sedang + "-" + rendah + "}.$$";
    let rumus2 =
        "$${" + tinggi + "{-X} \\over " + tinggi + "-" + sedang + "}.$$";
    let isi = `
            <h4 class="mb-4">Variabel Sedang</h4>
            <div class="container-rumus">
            <p class="u">$$u Sedang =$$</p>
                    <div class="rumus">
                        <p class="rendah">0</p>
                        <p class="sedang1">${rumus1}</p>
                        <p class="sedang2">${rumus2}</p>
                        <p class="tinggi">1</p>
                    </div>
                </div>


                <div class="container-rumus">
                    <div class="rumus">
                        <p class="rendah">0</p>
                        <p class="sedang1 mt-2 style="font-size:15px">$$ ${rendah} <= X <= ${sedang} $$</p>
                        <p class="sedang2 mt-2 style="font-size:15px">$$ ${sedang} <= X <= ${tinggi} $$</p>
                        <p class="tinggi">1</p>
                    </div>
                </div>
    `;

    document.getElementById(`variabel${index}`).innerHTML += isi;
}
function perhitunganVariabelTinggi(index, rendah = 1, sedang = 2, tinggi = 3) {
    let rumus1 =
        "$${X {-" + sedang + "} \\over " + tinggi + "-" + sedang + "}.$$";
    let isi = `
            <h4 class="mb-4">Variabel Tinggi</h4>
            <div class="container-rumus">
            <p class="u">$$u Tinggi =$$</p>
                    <div class="rumus">
                        <p class="rendah">0</p>
                        <p class="sedang1" style=top:30px>${rumus1}</p>
                        <p class="tinggi">1</p>
                    </div>
                </div>


                <div class="container-rumus">
                    <div class="rumus">
                        <p class="rendah">0</p>
                        <p class="sedang1" style="top:40px; font-size:15px">$$ ${sedang} <= X <= ${tinggi} $$</p>
                        <p class="tinggi">1</p>
                    </div>
                </div>
    `;

    document.getElementById(`variabel${index}`).innerHTML += isi;
}
