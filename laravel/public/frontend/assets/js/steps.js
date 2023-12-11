

const btnTamen=document.getElementById("btn-tamen")
const btnMelka=document.getElementById("btn-melkea")
const InpytTamen=document.getElementById("input-btnTamen")
const InpytMelka=document.getElementById("input-btn-Melka")
console.log(InpytTamen,InpytMelka);
btnTamen.addEventListener("click",function(e){
    e.preventDefault()
    ClickTamen()
})
btnMelka.addEventListener("click",function(e){
    e.preventDefault()
    ClickMelka()
})
function ClickTamen() {
    btnMelka.classList.remove("active")
    btnTamen.classList.add("active")
    
    InpytTamen.classList.remove("d-none")
    InpytTamen.classList.add("d-block")
    
    InpytMelka.classList.remove("d-block")
    InpytMelka.classList.add("d-none")
   
}
function ClickMelka() {
    btnTamen.classList.remove("active")
    btnMelka.classList.add("active")

    InpytTamen.classList.add("d-none")
    
    InpytTamen.classList.remove("d-block")
    InpytMelka.classList.remove("d-none")
    InpytMelka.classList.add("d-block")
}

const btnTasalsol=document.getElementById("btn-tasalsol")
const btnGomrok=document.getElementById("btn-gomrok")
const InpytTasalsol=document.getElementById("input-Tasalsol")
const InpytGomrok=document.getElementById("input-gomrok")

btnTasalsol.addEventListener("click",function(e){
    e.preventDefault()
    ClickTasalsol()
})
btnGomrok.addEventListener("click",function(e){
    e.preventDefault()
    ClickGomrok()
})

function ClickTasalsol() {
    btnGomrok.classList.remove("active")
    btnTasalsol.classList.add("active")
    
    InpytTasalsol.classList.remove("d-none")
    InpytTasalsol.classList.add("d-block")
    
    InpytGomrok.classList.remove("d-block")
    InpytGomrok.classList.add("d-none")
   
}

function ClickGomrok() {
    btnTasalsol.classList.remove("active")
    btnGomrok.classList.add("active")

    InpytTasalsol.classList.add("d-none")
    
    InpytTasalsol.classList.remove("d-block")
    InpytGomrok.classList.remove("d-none")
    InpytGomrok.classList.add("d-block")
}