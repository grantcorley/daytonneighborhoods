//scripts.js

//console.log('----- scripts.js is running --------');

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

    var hyperlinks = document.querySelectorAll('.hyperlink');

    var i = 0;

    for (i = 0; i < hyperlinks.length; i++){
        console.log("hyperlink!!!");
        var hl = hyperlinks[i];
        processLink(hl);
    }

}); //end addEventListener




//only get featured neighborhoods if this is the home page
  var isHomePage = document.querySelector("body.home");
  if(isHomePage){
    getFeaturedNeighborhoods();
  }

  function Neighborhood(name, resource) {
    this.name = name;
    this.resource = resource;
  }


function getFeaturedNeighborhoods(){

    var arlington_heights = new Neighborhood("Arlington Heights", "arlington-heights");
    var belmont = new Neighborhood("Belmont", "belmont");
    var burkhardt = new Neighborhood("Burkhardt", "burkhardt");
    var carillon = new Neighborhood("Carillon", "carillon");
    var college_hill = new Neighborhood("College Hill", "college-hill");
    var dayton_view_triangle = new Neighborhood("Dayton View Triangle", "dayton-view-triangle");
    var deWeese = new Neighborhood("DeWeese", "deWeese");
    var fairlane = new Neighborhood("Fairlane", "fairlane");
    var fairview = new Neighborhood("Fairview", "fairview");
    var five_oaks = new Neighborhood("Five Oaks", "five-oaks");
    var graftonHill = new Neighborhood("Grafton Hill", "grafton-hill");
    var hillcrest = new Neighborhood("Hillcrest", "hillcrest");
    var historic_inner_east = new Neighborhood("Historic Inner East", "historic-inner-east");
    var lakeview = new Neighborhood("Lakeview", "lakeview");
    var madden_hill = new Neighborhood("Madden Hill", "madden-hill");
    var mount_vernon = new Neighborhood("Mount Vernon", "mount-vernon");
    var miami_chapel = new Neighborhood("Miami Chapel", "miami-chapel");
    var north_riverdale = new Neighborhood("North Riverdale", "north-riverdale");
    var northern_hills = new Neighborhood("Northern Hills", "northern-hills");
    var old_north_dayton = new Neighborhood("Old North Dayton", "old-north-dayton");
    var patterson_park = new Neighborhood("Patterson Park", "patterson-park");
    var philadelphia_woods = new Neighborhood("Philadelphia Woods", "philadelphia-woods");
    var pineview = new Neighborhood("Pineview", "pineview");
    var riverdale = new Neighborhood("Riverdale", "riverdale");
    var santa_clara = new Neighborhood("Santa Clara", "santa-clara");
    var twin_towers = new Neighborhood("Twin Towers", "twin-towers");
    var university_row = new Neighborhood("University Row", "university-row");
    var walnut_hills = new Neighborhood("Walnut Hills", "walnut-hills");
    var westwood = new Neighborhood("Westwood", "westwood");
    var wrightDunbar = new Neighborhood("Wright-Dunbar", "wright-dunbar");


    var neighborhoods = [
          belmont, college_hill, dayton_view_triangle, deWeese, fairlane, fairview, five_oaks,
          graftonHill, hillcrest, historic_inner_east, lakeview, madden_hill, miami_chapel,
          mount_vernon, north_riverdale, northern_hills, old_north_dayton,
          patterson_park, philadelphia_woods, pineview, riverdale, santa_clara, twin_towers,
          university_row, walnut_hills, westwood, wrightDunbar
        ]



        var featuredNeighborhoods = new Array();


        for(var j=1; j <= 6; j++){

          var randomNumber = Math.floor(Math.random() * neighborhoods.length);
          //console.log("the random number is " + randomNumber);

          var randomNeighborhood = neighborhoods[randomNumber];
          featuredNeighborhoods.push(randomNeighborhood);
          neighborhoods.splice(randomNumber, 1);


        }//end for loop


        featuredNeighborhoods.sort(function (a, b) {
            if (a.name < b.name) {
              return -1;
            }
            if (a.name > b.name) {
              return 1;
            }
            // names must be equal
            return 0;
        });



  //Neighborhood 1 -----
  var neighborhood01 = featuredNeighborhoods[0];
  var neighborhood01_headline = document.querySelector(".neighborhood01 h4");
  neighborhood01_headline.innerHTML = featuredNeighborhoods[0].name;
  var neighborhood01_links = document.querySelectorAll(".neighborhood01 a");
  neighborhood01_links[0].setAttribute("href", neighborhood01.resource);
  neighborhood01_links[1].setAttribute("href", neighborhood01.resource);

  var neighborhood01_img = document.querySelector(".neighborhood01 img");
  neighborhood01_img.setAttribute("src", getImgPath( neighborhood01.resource ) );
  neighborhood01_img.setAttribute("alt", neighborhood01.name + ", Dayton OH");

  //Neighborhood 2 -----
  var neighborhood02 = featuredNeighborhoods[1];
  var neighborhood02_headline = document.querySelector(".neighborhood02 h4");
  neighborhood02_headline.innerHTML = featuredNeighborhoods[1].name;

  var neighborhood02_img = document.querySelector(".neighborhood02 img");
  neighborhood02_img.setAttribute("src", getImgPath( neighborhood02.resource ) );
  neighborhood02_img.setAttribute("alt", neighborhood02.name + ", Dayton OH");

  var neighborhood02_links = document.querySelectorAll(".neighborhood02 a");
  neighborhood02_links[0].setAttribute("href", neighborhood02.resource);
  neighborhood02_links[1].setAttribute("href", neighborhood02.resource);

  //Neighborhood 3 -----
  var neighborhood03 = featuredNeighborhoods[2];
  var neighborhood03_headline = document.querySelector(".neighborhood03 h4");
  neighborhood03_headline.innerHTML = neighborhood03.name;

  var neighborhood03_img = document.querySelector(".neighborhood03 img");
  neighborhood03_img.setAttribute("src", getImgPath( neighborhood03.resource ) );
  neighborhood03_img.setAttribute("alt", neighborhood03.name + ", Dayton OH");

  var neighborhood03_links = document.querySelectorAll(".neighborhood03 a");
  neighborhood03_links[0].setAttribute("href", neighborhood03.resource);
  neighborhood03_links[1].setAttribute("href", neighborhood03.resource);


  //Neighborhood 4 -----
  var neighborhood04 = featuredNeighborhoods[3];
  var neighborhood04_headline = document.querySelector(".neighborhood04 h4");
  neighborhood04_headline.innerHTML = neighborhood04.name;

  var neighborhood04_img = document.querySelector(".neighborhood04 img");
  neighborhood04_img.setAttribute("src", getImgPath( neighborhood04.resource ) );
  neighborhood04_img.setAttribute("alt", neighborhood04.name + ", Dayton OH");

  var neighborhood04_links = document.querySelectorAll(".neighborhood04 a");
  neighborhood04_links[0].setAttribute("href", neighborhood04.resource);
  neighborhood04_links[1].setAttribute("href", neighborhood04.resource);


  //Neighborhood 5 -----
  var neighborhood05 = featuredNeighborhoods[4];
  var neighborhood05_headline = document.querySelector(".neighborhood05 h4");
  neighborhood05_headline.innerHTML = neighborhood05.name;

  var neighborhood05_img = document.querySelector(".neighborhood05 img");
  neighborhood05_img.setAttribute("src", getImgPath( neighborhood05.resource ) );
  neighborhood05_img.setAttribute("alt", neighborhood05.name + ", Dayton OH");

  var neighborhood05_links = document.querySelectorAll(".neighborhood05 a");
  neighborhood05_links[0].setAttribute("href", neighborhood05.resource);
  neighborhood05_links[1].setAttribute("href", neighborhood05.resource);


  //Neighborhood 6 -----
  var neighborhood06 = featuredNeighborhoods[5];
  var neighborhood06_headline = document.querySelector(".neighborhood06 h4");
  neighborhood06_headline.innerHTML = neighborhood06.name;

  var neighborhood06_img = document.querySelector(".neighborhood06 img");
  neighborhood06_img.setAttribute("src", getImgPath( neighborhood06.resource ) );
  neighborhood06_img.setAttribute("alt", neighborhood06.name + ", Dayton OH");

  var neighborhood06_links = document.querySelectorAll(".neighborhood06 a");
  neighborhood06_links[0].setAttribute("href", neighborhood06.resource);
  neighborhood06_links[1].setAttribute("href", neighborhood06.resource);

}

//})();//end IIFE


function getImgPath(imgName){

  //console.log('getImgPath()');

  var thePath;

  if(imgName === null){
    thePath = "wp-content/themes/daytonneighborhoods/images/logo_1980x1000_alt.gif";
  }
  else{
    thePath = "wp-content/themes/daytonneighborhoods/images/featured/" + imgName + ".jpg";
  }

  //console.log('thePath = ' + thePath);

  return thePath;
}


function processLink(param){
  console.log("processLink(" + param + ")");
}


// var neighborhoods = [
//
//   "Arlington Heights", "Belmont", "Burkhardt", "Carillon", "College Hill", "Cornell Heights",
//   "Dayton View Triangle", "DeWeese", "Downtown", "Eastern Hills", "Eastmont", "Edgemont",
//   "Fairlane", "Fairview", "Five Oaks", "Forest Ridge - Quail Hollow", "Gateway", "Germantown Village",
//   "Grafton Hill", "Greenwich Village", "Hearthstone", "Highview Hills", "Hillcrest", "Historic Inner East",
//   "Kittyhawk", "Lakeview", "Linden Heights", "Little Richmond", "MacFarlane", "Madden Hills",
//   "McCook Field", "McPherson", "Miami Chapel", "Mount Vernon", "North Riverdale", "Northern Hills",
//   "Northridge Estates", "Old Dayton View", "Old North Dayton", "Oregon", "Patterson Park", "Pheasant Hill",
//   "Philadelphia Woods", "Pineview", "Princeton Heights", "Residence Park", "Riverdale", "Roosevelt",
//   "Santa Clara", "Shroyer Park", "South Park", "Southern Dayton View", "Springfield", "Stoney Ridge",
//   "Twin Towers", "University Park", "University Row", "Walnut Hills", "Webster Station", "Wesleyan Hill",
//   "Westwood", "Wolf Creek", "Wright View", "Wright-Dunbar"
//
// ];
