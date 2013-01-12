//
//    var data  = new Array(4, 8, 15, 16, 23, 42);
//    var data = [4, 8, 15, 16, 23, 42];
    
//    var data = [
//        {'letter': 'A', 'frequency': .08167},
//        {'letter': 'B', 'frequency': .01492},
//        {'letter': 'C', 'frequency': .02780},
//        {'letter': 'D', 'frequency': .04253},
//        {'letter': 'E', 'frequency': .12702},
//        {'letter': 'F', 'frequency': .02288},
//        {'letter': 'G', 'frequency': .02022},
//        {'letter': 'H', 'frequency': .06094},
//        {'letter': 'I', 'frequency': .06973},
//        {'letter': 'J', 'frequency': .00153},
//        {'letter': 'K', 'frequency': .00747},
//        {'letter': 'L', 'frequency': .04025},
//        {'letter': 'M', 'frequency': .02517},
//        {'letter': 'N', 'frequency': .08167},
//        {'letter': 'O', 'frequency': .01492},
//        {'letter': 'P', 'frequency': .02780},
//        {'letter': 'Q', 'frequency': .04253},
//        {'letter': 'R', 'frequency': .12702},
//        {'letter': 'S', 'frequency': .02288},
//        {'letter': 'T', 'frequency': .02022},
//        {'letter': 'U', 'frequency': .06094},
//        {'letter': 'V', 'frequency': .06973},
//        {'letter': 'X', 'frequency': .205},
//        {'letter': 'Y', 'frequency': .00747},
//        {'letter': 'Z', 'frequency': .04025}
//    ];
    
    /*HTML*/
    //*
    var chart = d3.select("body")
                  .append("div")
                  .attr("class", "chart");

    chart.selectAll("div")
         .data(data)
         .enter().append("div")
         .style("width", function(d) { return d * 10 + "px"; })
         .text(function(d) { return d; });

    /*END HTML*/

    /*SVG*/
    /*
    var optionDomain = new Array(0, d3.max(data));
    var optionRange = new Array(0, 420);

    var chart = d3.select("#div-chart-1").append("svg")
                  .attr("class", "chart")
                  .attr("width", 420)
                  .attr("height", 20 * data.length);
    var x     = d3.scale.linear()
                  .domain(optionDomain)
                  .range(optionRange);

    chart.selectAll("rect")
         .data(data)
         .enter().append("rect")
         .attr("y", function(d, i) { return i * 20; })
         .attr("width", x)
         .attr("height", 20);



    /*END SVG*/
    
    
    var margin = {top: 20, right: 20, bottom: 30, left: 40};
    var width = 300 - margin.left - margin.right;
    var height = 150 - margin.top - margin.bottom;

    var formatPercent = d3.format(".2%");

    var x = d3.scale.ordinal()
                        .rangeRoundBands([0, width], .1);

    var y = d3.scale.linear()
                        .range([height, 0]);

    var xAxis = d3.svg.axis()
                        .scale(x)
                        .orient("bottom");

    var yAxis = d3.svg.axis()
                        .scale(y)
                        .orient("left")
                        .tickFormat(formatPercent);

    var svg = d3.select("body")
                .append("svg")
                    .attr("width", width + margin.left + margin.right)
                    .attr("height", height + margin.top + margin.bottom)
                  .append("g")
                    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");



    data.forEach(function(d) {
      d.values = +d.values;
    });

    x.domain(data.map(function(d) { return d.keys; }));
    y.domain([0, d3.max(data, function(d) { return d.values; })]);

    svg.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height + ")")
        .call(xAxis);

    svg.append("g")
        .attr("class", "y axis")
        .call(yAxis)
//      .append("text")
//        .attr("transform", "rotate(-90)")
//        .attr("y", 6);
//        .attr("dy", ".71em");
//        .style("text-anchor", "end")
//        .text("Frequency");

    svg.selectAll(".bar")
        .data(data)
      .enter().append("rect")
        .attr("class", "bar")
        .attr("x", function(d) { return x(d.keys); })
        .attr("width", x.rangeBand())
        .attr("y", function(d) { return y(d.values); })
        .attr("height", function(d) { return height - y(d.values); });

