//scripts.js

//add <a> tags dyamically to hyperlink fields
function processLink(hl){

    var textString = hl.textContent;

    // create wrapper container
    var wrapper = document.createElement('a');

    // insert wrapper before el in the DOM tree
    hl.parentNode.insertBefore(wrapper, hl);
    wrapper.appendChild(hl);
    var theURL = ("http://www." + textString);

    wrapper.setAttribute("href", theURL);

}


//(function () {//start IIFE

  document.addEventListener('DOMContentLoaded', function(event) {

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
