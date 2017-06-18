

$(function () {
    $('#grafico01').highcharts({
        chart: {
            type: 'spline'
        },
		credits: {
			enabled: false
		},
        title: {
            text: ''
        }, 
        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: [ "January" , "February" , "March" , "April" , "Maio" , "June" , "July" , "August" , "September" , "October" , "November" , "December"],
                year: '%B'
            },
            title: {
                text: 'Dias'
            }
        },
        yAxis: {
            title: {
                text: 'Venda R$'
            },
            min: 0
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br>',
            pointFormat: 'Dia: {point.x:%e %B}: R$ {point.y:.2f}0,00 '
        },

        plotOptions: {
            spline: {
                marker: {
                    enabled: true
                }
            }
        },

        series: [{
            
            name: 'PS4',
            data: [
               
                [Date.UTC(2015,  4, 1), 1 ],
                [Date.UTC(2015,  4, 2), 3],
                [Date.UTC(2015,  4, 3), 6 ],
                [Date.UTC(2015,  4, 4), 11],
                [Date.UTC(2015,  4, 5), 4 ],
                [Date.UTC(2015,  4, 6), 5],
                [Date.UTC(2015,  4, 7), 3 ],
                [Date.UTC(2015,  4, 8), 55],
                [Date.UTC(2015,  4, 9), 23 ],
                [Date.UTC(2015,  4, 10), 3], 
                [Date.UTC(2015,  4, 11), 2 ],
                [Date.UTC(2015,  4, 12), 5],
                [Date.UTC(2015,  4, 13), 23 ],
                [Date.UTC(2015,  4, 14), 35],
                [Date.UTC(2015,  4, 15), 31 ],
                [Date.UTC(2015,  4, 16), 32],
                [Date.UTC(2015,  4, 17), 32 ],
                [Date.UTC(2015,  4, 18), 32],
                [Date.UTC(2015,  4, 19), 32 ],
                [Date.UTC(2015,  4, 20), 30], 
                [Date.UTC(2015,  4, 21), 30 ],
                [Date.UTC(2015,  4, 22), 35],
                [Date.UTC(2015,  4, 23), 31 ],
                [Date.UTC(2015,  4, 24), 35],
                [Date.UTC(2015,  4, 25), 23 ],
                [Date.UTC(2015,  4, 26), 22],
                [Date.UTC(2015,  4, 27), 23 ],
                [Date.UTC(2015,  4, 28), 21],
                [Date.UTC(2015,  4, 29), 12 ],
                [Date.UTC(2015,  4, 30), 15], 
                [Date.UTC(2015,  4, 31), 15]
            ]
        }, {
            name: 'PC',
            data: [
               
                [Date.UTC(2015,  4, 1), 3 ],
                [Date.UTC(2015,  4, 2), 5],
                [Date.UTC(2015,  4, 3), 43 ],
                [Date.UTC(2015,  4, 4), 35],
                [Date.UTC(2015,  4, 5), 23 ],
                [Date.UTC(2015,  4, 6), 19],
                [Date.UTC(2015,  4, 7), 17 ],
                [Date.UTC(2015,  4, 8), 15],
                [Date.UTC(2015,  4, 9), 12 ],
                [Date.UTC(2015,  4, 10), 15], 
                [Date.UTC(2015,  4, 11), 13 ],
                [Date.UTC(2015,  4, 12), 16],
                [Date.UTC(2015,  4, 13), 13 ],
                [Date.UTC(2015,  4, 14), 13],
                [Date.UTC(2015,  4, 15), 13 ],
                [Date.UTC(2015,  4, 16), 13.5],
                [Date.UTC(2015,  4, 17), 12.3 ],
                [Date.UTC(2015,  4, 18), 15.35],
                [Date.UTC(2015,  4, 19), 12.3 ],
                [Date.UTC(2015,  4, 20), 15.35], 
                [Date.UTC(2015,  4, 21), 12.3 ],
                [Date.UTC(2015,  4, 22), 25],
                [Date.UTC(2015,  4, 23), 22 ],
                [Date.UTC(2015,  4, 24), 35],
                [Date.UTC(2015,  4, 25), 32 ],
                [Date.UTC(2015,  4, 26), 13],
                [Date.UTC(2015,  4, 27), 12 ],
                [Date.UTC(2015,  4, 28), 15],
                [Date.UTC(2015,  4, 29), 19 ],
                [Date.UTC(2015,  4, 30), 14], 
                [Date.UTC(2015,  4, 31), 22]
            ]
        }]
    });		

});