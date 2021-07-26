setTimeout(function(){
	document.body.classList.add('body_visible');
}, 200);


function hello() {
var xhr = new XMLHttpRequest();
xhr.open('GET', 'https://api.cryptonator.com/api/ticker/btc-usd', false)
xhr.send();

if (xhr.status != 200) {

  alert( xhr.status + ': ' + xhr.statusText ); 
} else {
  var myObj = JSON.parse(xhr.responseText);
  var bts_usd_price_js = parseFloat(myObj.ticker.price).toFixed(2)
  document.getElementById("btc-usd-price").innerHTML = bts_usd_price_js + "$"
  }
}



function myTimer() {
	hello()
    setTimeout(myTimer, 10000);
}
myTimer();