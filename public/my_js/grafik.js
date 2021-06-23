function grafikVariabel(myData, nm_kriteria = "Kritria", kategori) {
    let options = {
        series: [
            {
                name: "Rendah",
                data: [1, 1, 0, 0, 0]
            },
            {
                name: "Sedang",
                data: [0, 0, 1, 0, 0]
            },
            {
                name: "Tinggi",
                data: [0, 0, 0, 1, 1]
            }
        ],
        colors: ["#0341fc"],
        chart: {
            height: 350,
            type: "line",
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: "straight"
        },
        title: {
            text: nm_kriteria,
            align: "left"
        },
        legend: {
            tooltipHoverFormatter: function(val, opts) {
                return (
                    val +
                    " - " +
                    opts.w.globals.series[opts.seriesIndex][
                        opts.dataPointIndex
                    ] +
                    ""
                );
            }
        },
        markers: {
            size: 0,
            hover: {
                sizeOffset: 6
            }
        },
        xaxis: {
            categories: kategori
        },
        tooltip: {
            y: [
                {
                    title: {
                        formatter: function(val) {
                            return val;
                        }
                    }
                },
                {
                    title: {
                        formatter: function(val) {
                            return val;
                        }
                    }
                },
                {
                    title: {
                        formatter: function(val) {
                            return val;
                        }
                    }
                }
            ]
        },
        grid: {
            borderColor: "#f1f1f1"
        }
    };

    let chart = new ApexCharts(document.querySelector(`#${myData}`), options);
    chart.render();
}

let grafik = document.getElementById("grafik");

function ambilKriteria() {
    return fetch(`${APP_URL}/api/kriteria`)
        .then(response => response.json())
        .then(data => data);
}
async function ulangGrafik() {
    let kriteria = await ambilKriteria();

    let kategori = ["0"];
    for (let index = 0; index < kriteria.length; index++) {
        grafik.innerHTML += `<div id=chart${index} class="mt-4"></div>`;
        grafik.innerHTML += `<div id=variabel${index} class="mb-4"></div>`;
    }

    kriteria.forEach(function(value, index) {
        value.nilai_kriteria.forEach(function(item) {
            if (item.metode === "Himpunan") {
                kategori.push(item.himpunan.bobot_himpunan);
            } else {
                kategori.push(item.bobot_kriteria);
            }
        });
        grafikVariabel(`chart${index}`, value.nm_kriteria, kategori);
        kategori = ["0"];
    });
}

ulangGrafik();
