/*
$(document).ready(function(){
  $("#btn_reset").on("click", function(){
    $(".poiTable").empty();
    $(".countMsg").empty();
    $(".errMsg").empty();
    $ ("input [type=text]").val("");
    return false;
  });
});
// OpenStreet Map Tiles
var osmUrl = "https://{s}.tile.osm.org/{z}/{x}/{y}.png";
var osm = L.tileLayer(osmUrl);

// CartoDB Map Tiles
var cartodbUrl ="https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png";
var cartodb = L.tileLayer(cartodbUrl);
var googlemapsHybridUrl ="https://{s}.google.com/vt/lyrs=s, h&x={x} &y={y}&z={z}";

var googlemapsHybrid = L.tileLayer(googlemapsHybridUrl,{ 
maxZoom: 20,
subdomains: ["mt0","mt1","mt2","mt3"]
});

// Define POI layer group
var pois = new L.featureGroup();

// Map settings
var mymap = L.map("mapid", {
center: [1.559864, 103.637799],
zoom: 18,
layers: [cartodb, pois]
});

var baselayers = {
"OpenStreet Map": osm,
"CartoDB Map": cartodb,
"Google Maps Hybrid": googlemapsHybrid
};

// Adding a vector point
L.marker([1.559482, 103.636894],{title:"PSZ"}).bindPopup("Perpustakaan Sultanah Zanariah (PSZ)").addTo(pois);

L.marker([1.560353, 103.635623],{title:"Makmal GIS II"}).bindPopup("Makmal GIS II (C02)").addTo(pois);

// To center map based on POIs
var bounds = pois.getBounds();
mymap.fitBounds(bounds) ;


var overlays = {
  "POIs": pois
 };
        
        // Draw all layers0
L.control.layers(baselayers, overlays, {collapsed:false}).addTo(mymap);*/


const userCardTemplate = document.querySelector("[data-user-template]")
const userCardContainer = document.querySelector("[data-user-cards-container]")
const searchInput = document.querySelector("[data-search]")

let users=[]

searchInput.addEventListener("input",(e) =>{

  const value=e.target.value.toLowerCase()
  users.forEach(user =>{
    const isVisible=
    user.name.toLowerCase().includes(value) || user.email.toLowerCase().includes(value)
    user.element.classList.toggle("hide", !isVisible)

  })

})

fetch("teacherinfo.json")
.then(res => res.json())
.then(data =>{
  users= data.map(user => {
  const card = userCardTemplate.content.cloneNode(true).children[0]
  const header= card.querySelector("[data-header]")
  const body= card.querySelector("[data-body]")
  const tel= card.querySelector("[data-telephone]")
  const clas= card.querySelector("[data-classroom]")
  const days= card.querySelector("[data-day]")



    header.textContent=user.name
    body.textContent=user.email
    tel.textContent=user.telephone
    clas.textContent=user.classroom
    days.textContent=user.day


    userCardContainer.append(card)
    return{ name: user.name,   email: user.email,tel: user.telephone,
      clas: user.classroom,    days: user.day,  element: card}
  })
})

