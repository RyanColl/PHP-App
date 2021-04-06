$($(document).ready(() => {
    $(".insert").fadeOut(1)
    $(".projects").hover(handlerInAbout, handlerOutAbout)
    $(".interests").hover(handlerInInterests, handlerOutInterests)
    setTimeout(() => { $("#h3").addClass("ryan2") }, 3000);
    
}))

const handlerInAbout = () => {
    let p = $(".navpa")
    setCSS(p)
    $("#p").fadeIn(1)
    // $("#p").load("./stuff/abouthover.html")
}
const handlerOutAbout = () => {
    let p = $(".navpa")
    returnCSS(p)
    $("#p").fadeOut(150)
    // $(".abouthover").remove()
}
const handlerInInterests = () => {
    let p = $(".navpi")
    setCSS(p)
    $("#i").fadeIn(1)
    // $("#i").load("./stuff/interestshover.html")
}
const handlerOutInterests = () => {
    let p = $(".navpi")
    returnCSS(p)
    $("#i").fadeOut(150)
    // $(".interestshover").remove()
}
const setCSS = (p) => {
    p.css("color", "rgb(153, 153, 153)")
}
const returnCSS = (p) => {
    p.css("color", "#666")
}
