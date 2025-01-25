if('serviceWorker' in navigator) {
    navigator.serviceWorker
        .register('sw.js')
        .then(function() { console.log('Service Worker Registered'); });
}

const wrapper = document.getElementsByClassName("wrapper")[0];
const timer = document.getElementById("footer");
const container = document.getElementById("container");

let words;

addInGameEvents();
loadWordList("words0.js");

//resize
document.getElementById("container").style.height = "calc(" + window.innerHeight + "px - 151px)";
window.addEventListener('resize', function() {
    document.getElementById("container").style.height = "calc(" + window.innerHeight + "px - 151px)";
});

function addInGameEvents() {
    wrapper.addEventListener("click", clickEvents);
    window.onclick = function() {
        window.onclick = null;
    }
    document.getElementById("cardPackSelect").addEventListener("change", onCardPackSelect);
}
function loadWordList(listName) {
    console.log("loading: " + listName);
    import('./words/js/' + listName)
        .then(obj => {
            words = obj.default;
            clickEvents();
        })
        .catch(err => errorLoadWordList(err));
}
function  errorLoadWordList(error) {
    import('./words/js/words0.js')
        .then(obj => words = obj.default)
        .catch(err => console.log(error + " | " + err));
}
function onCardPackSelect() {
    loadWordList(this.value);
}

async function clickEvents() {
    var word = words.splice(Math.floor(Math.random() * words.length), 1);
    $(container).fadeTo(250, 0)
    await sleep(250);
    $(container).html(word);
    $(container).fadeTo(250, 1);
    setRandomColor();
}

function sleep(time) {
    return new Promise(resolve => {
      setTimeout(() => {
        resolve('resolved');
      }, time);
    });
  }

function setRandomColor() {
    document.body.style = "background-color: " + randomHsl();
}

function randomHsl() {
    return 'hsla(' + (Math.random() * 360) + ', 100%, 10%, 1)';
}