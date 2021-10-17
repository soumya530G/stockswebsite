console.log("This is me");
//hdhgpjP6Om06Xp2Q6tTMeJVgOvE4xF7r
let accordionPanelsStayOpenExample = document.getElementById('accordionPanelsStayOpenExample');
const xhr = new XMLHttpRequest();
xhr.open('GET', 'https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=AAPL&interval=5min&apikey=3KCVRM4JV202KVWM', true);
xhr.onload = function () {
    if (this.status === 200) {

        let json = JSON.parse(this.responseText);
        //let time = json['Time Series (5min)'];
        let time = json['Meta Data'];
        //console.log(time);
        let stockhtml = "";
        Object.values(time).forEach(element=>{
            arr.push(element.Information);
            //console.log(time[stock])
            let stock = `<div class='accordion-item'>
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
             ${element["Symbol"]}
             </button> </h2>
             <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
             <div class="accordion-body"> ${element["Information"]} </div>
             </div> </div>`;
             stockhtml += stock;
            });
        accordionPanelsStayOpenExample.innerHTML = stockhtml;
    }
       /* let stockhtml = "";
        time.forEach(function(element, symbol){
            let stocks = `<div class='accordion-item'>
                      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                       ${symbol}
                       </button> </h2>
                       <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body"> ${element[stocks]} </div>
                       </div> </div>`;
            stockhtml += stocks;
        });
        accordionPanelsStayOpenExample.innerHTML = stockhtml;

    }*/
    else {
        console.log("Some error occured")
    }
}
let stock = `<div class='accordion-item'>
<h2 class="accordion-header" id="panelsStayOpen-headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
 
 </button> </h2>
 <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
 <div class="accordion-body"></div>
 </div> </div>`
xhr.send()
