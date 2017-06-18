/**
 * Created by BRUNO on 12/08/2015.
 */
var LasaPanel = function() {

    var handleInitChartPanel = function(){

        var chartData = [
            {
                "category": "Jan",
                "column-1": 7.0,
                "column-2": -0.2,
                "column-3": -0.9,
                "column-4": 3.9
            },
            {
                "category": "Fev",
                "column-1": 6.9,
                "column-2": 0.8,
                "column-3": 0.6,
                "column-4": 4.2
            },
            {
                "category": "Mar",
                "column-1": 9.5,
                "column-2": 5.7,
                "column-3": 3.5,
                "column-4": 5.7
            },
            {
                "category": "Apr",
                "column-1": 14.5,
                "column-2": 11.3,
                "column-3": 8.4,
                "column-4": 8.5
            },
            {
                "category": "May",
                "column-1": 18.2,
                "column-2": 17.0,
                "column-3": 13.5,
                "column-4": 11.9
            },
            {
                "category": "Jun",
                "column-1": 21.5,
                "column-2": 22.0,
                "column-3": 17.0,
                "column-4": 15.2
            },
            {
                "category": "Jul",
                "column-1": 25.2,
                "column-2": 24.8,
                "column-3": 18.6,
                "column-4": 17.0
            },
            {
                "category": "Aug",
                "column-1": 26.5,
                "column-2": 24.1,
                "column-3": 17.9,
                "column-4": 16.6
            },
            {
                "category": "Sep",
                "column-1": 23.3,
                "column-2": 20.1,
                "column-3": 14.3,
                "column-4": 14.2
            },
            {
                "category": "Oct",
                "column-1": 18.3,
                "column-2": 14.1,
                "column-3": 9.0,
                "column-4": 10.3
            },
            {
                "category": "Nov",
                "column-1": 13.9,
                "column-2": 8.6,
                "column-3": 3.9,
                "column-4": 6.6
            },
            {
                "category": "Dec",
                "column-1": 9.6,
                "column-2": 2.5,
                "column-3": 1.0,
                "column-4": 4.8
            }
        ];


        AmCharts.makeChart("chart-1",
            {
                "type": "serial",
                "categoryField": "category",
                "startDuration": 1,
                "categoryAxis": {
                    "gridPosition": "start"
                },
                "trendLines": [],
                "graphs": [
                    {
                        "balloonText": "[[title]] of [[category]]:[[value]]",
                        "bullet": "round",
                        "id": "AmGraph-1",
                        "title": "Tokio",
                        "valueField": "column-1"
                    },
                    {
                        "balloonText": "[[title]] of [[category]]:[[value]]",
                        "bullet": "square",
                        "id": "AmGraph-2",
                        "title": "New York",
                        "valueField": "column-2"
                    },
                    {
                        "balloonText": "[[title]] of [[category]]:[[value]]",
                        "bullet": "square",
                        "id": "AmGraph-3",
                        "title": "Berlin",
                        "valueField": "column-3"
                    },
                    {
                        "balloonText": "[[title]] of [[category]]:[[value]]",
                        "bullet": "square",
                        "id": "AmGraph-4",
                        "title": "Londom",
                        "valueField": "column-4"
                    }
                ],
                "guides": [],
                "valueAxes": [
                    {
                        "id": "ValueAxis-1",
                        "title": "Temperatura"
                    }
                ],
                "allLabels": [],
                "balloon": {},
                "legend": {
                    "useGraphSettings": true
                },
                "titles": [
                    {
                        "id": "Title-1",
                        "size": 15,
                        "text": "Media de Temperatura mensal"
                    }
                ],
                "dataProvider": chartData
            }
        );
    };


    return{
        init:function(){

            handleInitChartPanel();
        }
    };

}();