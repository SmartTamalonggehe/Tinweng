function ambilDefinisi() {
    return $.ajax({
        url: "/admin/hasil/create",
        type: "get",
        datatype: "html",
        success: function(data) {}
    }).fail(function(jqXHR, ajaxOptions, thrownError) {
        alert("Server tidak merespon...");
    });
}

async function tampilDefinisiVariabel() {
    let definisiVariabel = $("#definisiVariabel");
    let data = await ambilDefinisi();
    let dataPemakai = data.pemakai;
    let dataVariabel = data.perhitungan_variabel;

    dataPemakai.forEach(pemakai => {
        definisiVariabel.append(`<tr>`);
        definisiVariabel.append(`<td>${pemakai.nm_pemakai}</td>`);
        dataVariabel.forEach(variabel => {
            if (pemakai.id === variabel.pemakai_id) {
                if (variabel.nm_kriteria === variabel.nm_kriteria) {
                    definisiVariabel.append(`
                    <td>
                    <p>Rendah= ${variabel.rendah}</p>
                    <p>Sedang= ${variabel.sedang}</p>
                    <p>Tinggi= ${variabel.tinggi}</p>
                    </td>
                    `);
                }
            }
        });
        definisiVariabel.append(`</tr>`);
    });
}

tampilDefinisiVariabel();

let tagInferensi = $("#inferensi");
let arrayAturan = [];
let ambilNilai = [];
let nilaiMin;
let cariZ;
let Z;
let min;
let tampilRumusZ;

async function tampilInferensi() {
    let data = await ambilDefinisi();
    let groupAturan = data.group_aturan;
    let aturan = data.aturan;
    let dataPemakai = data.pemakai;
    let dataVariabel = data.perhitungan_variabel;

    // Data Pemakai
    dataPemakai.forEach(elementPemakai => {
        tagInferensi.append(`<h5>${elementPemakai.nm_pemakai}</h5>`);
        // Group Aturan
        groupAturan.forEach(elementGroup => {
            tagInferensi.append(`<p>`);
            // Aturan
            aturan.forEach(aturanItem => {
                // Kondisi agar kelompok tidak berulang
                if (elementGroup.kelompok === aturanItem.kelompok) {
                    tagInferensi.append(`
                    ${aturanItem.nilai_kriteria.kriteria.nm_kriteria} = ${aturanItem.nilai_kriteria.himpunan.nm_himpunan}
                    `);
                    // Kondisi untuk Memberi Nilai
                    dataVariabel.forEach(variabel => {
                        memberiNilai(elementPemakai, variabel, aturanItem);
                    });
                }
            });
            // Memanggil Nilai Minimum
            cariNilaiMin(elementGroup.kelompok, elementPemakai.id);
            // Menampilkan nilai minimum
            tagInferensi.append(`<p class="rumus">${hitungNilaiZ(
                nilaiMin,
                cariZ
            )}
            </p>`);
            tagInferensi.append(`</p>`);

            hitungCrips(elementPemakai.id, nilaiMin, Z);
        });
    });
}

// Memberi Nilai pada setiap aturan
function memberiNilai(elementPemakai, variabel, aturanItem) {
    if (elementPemakai.id === variabel.pemakai_id) {
        if (variabel.nm_kriteria === variabel.nm_kriteria) {
            if (
                aturanItem.nilai_kriteria.himpunan.nm_himpunan === "Rendah" &&
                variabel.kriteria_id === aturanItem.nilai_kriteria.kriteria.id
            ) {
                tagInferensi.append(`(${variabel.rendah})`);
                arrayAturan.push({
                    nilai: variabel.rendah,
                    kelompok: aturanItem.kelompok,
                    pemakai_id: elementPemakai.id
                });
            }
            if (
                aturanItem.nilai_kriteria.himpunan.nm_himpunan === "Sedang" &&
                variabel.kriteria_id === aturanItem.nilai_kriteria.kriteria.id
            ) {
                tagInferensi.append(`(${variabel.sedang})`);
                arrayAturan.push({
                    nilai: variabel.sedang,
                    kelompok: aturanItem.kelompok,
                    pemakai_id: elementPemakai.id
                });
            }
            if (
                aturanItem.nilai_kriteria.himpunan.nm_himpunan === "Tinggi" &&
                variabel.kriteria_id === aturanItem.nilai_kriteria.kriteria.id
            ) {
                tagInferensi.append(`(${variabel.tinggi})`);
                arrayAturan.push({
                    nilai: variabel.tinggi,
                    kelompok: aturanItem.kelompok,
                    pemakai_id: elementPemakai.id
                });
            }
            // Menentukan nilai Z
            if (aturanItem.nilai_kriteria.kriteria.jenis === "Z") {
                if (aturanItem.nilai_kriteria.himpunan.id === 1) {
                    cariZ = "rendah";
                }
                if (aturanItem.nilai_kriteria.himpunan.id === 3) {
                    cariZ = "tinggi";
                }
            }
        }
    }
}
// Mencari Nilai Meinimum setiap aturan
function cariNilaiMin(groupAturan, pemakai_id) {
    rumus = $(".rumus");
    arrayAturan.forEach(element => {
        if (
            groupAturan === element.kelompok &&
            element.pemakai_id === pemakai_id
        ) {
            ambilNilai.push(element.nilai);
        }
    });
    nilaiMin = Math.min.apply(Math, ambilNilai);
    ambilNilai = [];
}

function hitungNilaiZ(nilaiMin, cariZ) {
    if (cariZ === "rendah") {
        min = 2 * nilaiMin;
        Z = (3 - min).toFixed(2);
        tampilRumusZ = `${nilaiMin} = (3-Z) / (3-1) <br>
        ${nilaiMin} = (3-Z)/2 <br>
        ${min} = 3-${min} <br>
        Z = ${Z}
        `;
    }
    if (cariZ === "tinggi") {
        min = 2 * nilaiMin;
        Z = (min - 1).toFixed(2);
        tampilRumusZ = `${nilaiMin} = (Z-1) / (3-1) <br>
        ${nilaiMin} = (Z-1)/2 <br>
        ${min} = ${min} - 1 <br>
        Z = ${Z}
        `;
    }
    return tampilRumusZ;
}

function hitungCrips(pemakai, nilaiMin, Z) {
    console.log(`${pemakai} dan ${nilaiMin} dan ${Z}`);
}

tampilInferensi();
