<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Stocks</title>
    <link rel="shortcut icon" href="./static/images/favicon.jpg" type="image/jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="./CSS/grid.css">
<link rel="stylesheet" href="./CSS/app.css">
<style>
  div.tradingview-widget-container
  {
    align: center;
  }
.dark-mode #dark 
{
  background-color: black;
  color: white;
  border-color: white;
}
#decor
{
  text-decoration: none;
  color: blue;
}
#m
{
  text-decoration: none;
  color:green;
}
</style>
  </head>
  <body class="loading" id="dark">
    <div class="nav-wrapper" id="dark">
      <div class="container" id="dark">
        <div class="nav" id="dark">
          <h2 class="logo" id="dark">
            ST<i class="bx bxs-dollar-circle bx-tada"></i>CKS
          </h2>
          <h5><a href="m-data.php" id="m">Market Data</a></h5>
          <h5><a href="crypto.html" id="m">Crypto</a></h5>
         
          <div class="dropdown">
        <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="true" id="dark">
           Symbol
         </button>
         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="dark">
           <li><a class="dropdown-item" href="AAPL.html" id="dark">AAPL</a></li>
           <li><a class="dropdown-item" href="HBIO.html"id="dark">HBIO</a></li>
           <li><a class="dropdown-item" href="IBM.html"id="dark">IBM</a></li>
           <li><a class="dropdown-item" href="MSF.html"id="dark">MSF</a></li>
           <li><a class="dropdown-item" href="GOOGL.html"id="dark">GOOGL</a></li>
         </ul>
       </div>
<button type="button" class="btn btn-outline-success"><a href="/soumya/form/logout.php" id="decor">Logout</a></button>
          <div class="darkmode-switch" id="darkmode-switch" onclick="myFunction()" id="dark">
          <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
            <span>
               <i class="bx bxs-moon"></i>
               <i class="bx bxs-sun"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    
    <div id="dark">
    <br><br><br>
</div>
    <!-- TradingView Widget BEGIN -->
  <div id="dark">
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->

  <!--  <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-3 col-md-6 col-sm-12">
            <div class="box">
              <div class="country-select" id="country-select">
                <div class="country-select-toggle" id="country-select-toggle">
                  <span>
                    Global
                  </span>
                  <i class="bx bx-chevron-down"></i>
                </div>
                <div class="country-select-list" id="country-select-list">
                  <input type="text" placeholder="search country">
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <div class="row">
          <div class="col-8 col-md-12 col-sm-12">
             <div class="row">
               <div class="col-4 col-md-4 col-sm-12">
                 <div class="box box-hover" id="dark">
                   <div class="count count-confirmed">
                     <div class="count-icon">
                       <i class="bx bxs-business"></i>
                     </div>
                     <div class="count-info" id="dark">
                       <h5 id="confirmed-total">
                       <?php 
        $API_KEY = "3KCVRM4JV202KVWM";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&apikey=" . $API_KEY));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $result = json_decode($server_output);

        $dataForToday = $result->{"Time Series (Daily)"};
        $dataForSingleDate = $dataForToday->{'2021-10-15'};
        echo $dataForSingleDate->{'1. open'} . '<br/>';
        ?>
                       </h5>
                       <span>Open</span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-4 col-md-4 col-sm-12">
                <div class="box box-hover" id="dark">
                  <div class="count count-recovered">
                    <div class="count-icon">
                      <i class="bx bxs-up-arrow-circle"></i>
                    </div>
                    <div class="count-info">
                      <h5 id="confirmed-total">
                      <?php 
        $API_KEY = "3KCVRM4JV202KVWM";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&apikey=" . $API_KEY));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $result = json_decode($server_output);

        $dataForToday = $result->{"Time Series (Daily)"};
        $dataForSingleDate = $dataForToday->{'2021-10-15'};
        echo $dataForSingleDate->{'2. high'} . '<br/>';
        ?>
                      </h5>
                      <span>High</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-4 col-md-4 col-sm-12">
                <div class="box box-hover" id="dark">
                  <div class="count count-death">
                    <div class="count-icon">
                      <i class="bx bxs-down-arrow-circle"></i>
                    </div>
                    <div class="count-info">
                      <h5 id="confirmed-total">
                      <?php 
        $API_KEY = "3KCVRM4JV202KVWM";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&apikey=" . $API_KEY));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $result = json_decode($server_output);

        $dataForToday = $result->{"Time Series (Daily)"};
        $dataForSingleDate = $dataForToday->{'2021-10-15'};
        echo $dataForSingleDate->{'3. low'} . '<br/>';
        ?>
                      </h5>
                      <span>Low</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12" id="dark">
              <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
                <div class="box" id="dark">
                  <div class="box-header" id="dark">
                    all times - APPLE
                  </div>
                  <div class="box-body" id="dark">
                    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_2ebb6"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 980,
  "height": 610,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_2ebb6"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-sm-12;" id="dark">
                <div class="box" id="dark">
                  <div class="box-header" id="dark">
                    Learn how stock market works
                  </div>
                  <div class="box-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/p7HKvqRI_Bo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
 
              <div class="col-6 col-md-6 col-sm-12" id="dark">
                <div class="box" id="dark">
                  <div class="box-header" id="dark">
                    Stock Market explained in one episode
                  </div>
                  <div class="box-body">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZCFkWDdmXG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
                    </div>
              

             </div>
          </div>

          <div class="col-4 col-md-12 col-sm-12">
            <div class="box" id="dark">
              <div class="box-header" id="dark">
                Last 24 hours - APPLE
                <hr>
              </div>
              <div class="box-body;">
              <h2 style="font-size:x-large">Open&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;High&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Low&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Close&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Volume<br></h2>
              <?php 
        $API_KEY = "3KCVRM4JV202KVWM";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,("https://www.alphavantage.co/query?function=TIME_SERIES_DAILY&symbol=AAPL&apikey=" . $API_KEY));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $result = json_decode($server_output);

        $dataForToday = $result->{"Time Series (Daily)"};
        $dataForSingleDate = $dataForToday->{'2021-10-15'};
        echo $dataForSingleDate->{'1. open'};
        echo str_repeat('&nbsp;', 21);
        echo $dataForSingleDate->{'2. high'};
        echo str_repeat('&nbsp;', 20);
        echo $dataForSingleDate->{'3. low'};
        echo str_repeat('&nbsp;', 22);
        echo $dataForSingleDate->{'4. close'};
        echo str_repeat('&nbsp;', 24);
        echo $dataForSingleDate->{'5. volume'} . '<br/>';

        ?>
                </div>
              </div>
              <div class="box" id="dark">
                <div class="box-header" id="dark">
                  Symbol Overview 
                </div>
                <div class="box-body" id="dark">
                  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_2787a"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text">Provided by</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "symbols": [
    [
      "Apple",
      "AAPL"
    ],
    [
      "Google",
      "GOOGL"
    ],
    [
      "Microsoft",
      "MSFT"
    ]
  ],
  "chartOnly": false,
  "width": 1000,
  "height": 400,
  "locale": "in",
  "colorTheme": "dark",
  "gridLineColor": "rgba(42 ,46, 57, 0)",
  "fontColor": "#787B86",
  "isTransparent": false,
  "autosize": false,
  "showFloatingTooltip": true,
  "scalePosition": "no",
  "scaleMode": "Normal",
  "fontFamily": "Trebuchet MS, sans-serif",
  "noTimeScale": false,
  "chartType": "area",
  "lineColor": "#2962FF",
  "bottomColor": "rgba(41, 98, 255, 0)",
  "topColor": "rgba(41, 98, 255, 0.3)",
  "container_id": "tradingview_2787a"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
                </div>
              </div>
              <div class="row">
  <div class="col-sm-6">
    <div class="card" id="dark">
      <div class="card-body" id="dark">
      <h2 class="card-title">Economic Calender</h2>
       <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Provided by</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
  {
  "colorTheme": "dark",
  "isTransparent": false,
  "width": "510",
  "height": "600",
  "locale": "in",
  "importanceFilter": "-1,0,1"
}
  </script>
</div>
<!-- TradingView Widget END -->
        
        <p class="card-text">Economic Calendar shows key upcoming economic events, announcements and news.Set up relevant economic calendar filters in a few clicks, selecting event importance and affected currencies</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" id="dark">
      <div class="card-body" id="dark">
      <h2 class="card-title">Timeline</h2>
         <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/key-events/" rel="noopener" target="_blank"><span class="blue-text">Provided</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "all_symbols",
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "regular",
  "width": 480,
  "height": 830,
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
        <p class="card-text">The Timelines widget lets you to scan through the complete history and key events of popular companies, cryptocurrencies and other assets.</p>
      </div>
    </div>
  </div>
</div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer" id="dark">
      API source from <a href="https://www.alphavantage.co/" target="_blank">Alphavantage.co</a>
      <br>
    </div>
    <div class="loader" id="dark">
      <i class="bx bxs-dollar-circle bx-spin"></i>
    </div>
   
     <!-- Bootstrap CSS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   <!---- <script src=".js/fetchApi.js"></script>
    <script src=".js/stockApi.js"></script>
    <script src=".js/app.js"></script>-->
    <script src="./js/index.js"></script>
   <script src=".js/app.js"></script>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
