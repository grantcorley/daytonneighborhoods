//scripts.js

function processLink(hl){

  console.log(hl);

  var textString = hl.textContent;

  console.log('the content is ' + textString);

  // create wrapper container
  var wrapper = document.createElement('a');

  // insert wrapper before el in the DOM tree
  hl.parentNode.insertBefore(wrapper, hl);

  wrapper.appendChild(hl);

  var theURL = ("http://www." + textString);

  wrapper.setAttribute("href", theURL);

}


//(function () {//start IIFE

  console.log("iife outer");

  document.addEventListener('DOMContentLoaded', function(event) {

    console.log("iife inner");

    var body = document.body;
    console.log(body);

    var hyperlinks = document.querySelectorAll('.hyperlink');

    var i = 0;

    for (i = 0; i < hyperlinks.length; i++){
        console.log("hyperlink!!!");
        var hl = hyperlinks[i];
        processLink(hl);
    }

  }); //end addEventListener




//})();//end IIFE
