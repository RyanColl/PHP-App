$($(document).ready(() => {
    fadeOut();
    $(".projects").hover(handlerInAbout, handlerOutAbout)
    $(".interests").hover(handlerInInterests, handlerOutInterests)
    scroll();
    
    
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
const images = () => {
    console.log()
}
const codeBlock = () => {
    setTimeout(() => { 
        $("#h3-2").fadeIn(1) 
        $("#h3-2").addClass("ryan2")
        $(".ryan").css("border-right", ".15em solid transparent")
        setTimeout(() => {
            $("#h3-3").fadeIn(1) 
            $("#h3-3").addClass("ryan3")
            $(".ryan2").css("border-right", ".15em solid transparent")
            setTimeout(() => {
                $("#h3-4").fadeIn(1) 
                $("#h3-4").addClass("ryan4")
                $(".ryan3").css("border-right", ".15em solid transparent")
                setTimeout(() => {
                    $("#h3-5").fadeIn(1) 
                    $("#h3-5").addClass("ryan5")
                    $(".ryan4").css("border-right", ".15em solid transparent")
                    setTimeout(() => {
                        $("#h3-6").fadeIn(1) 
                        $("#h3-6").addClass("ryan6")
                        $(".ryan5").css("border-right", ".15em solid transparent")
                        setTimeout(() => {
                            $("#h3-7").fadeIn(1) 
                            $("#h3-7").addClass("ryan7")
                            $(".ryan6").css("border-right", ".15em solid transparent")
                            setTimeout(() => {
                                $("#h3-8").fadeIn(1) 
                                $("#h3-8").addClass("ryan8")
                                $(".ryan7").css("border-right", ".15em solid transparent")
                                setTimeout(() => {
                                    $("#h3-9").fadeIn(1) 
                                    $("#h3-9").addClass("ryan9")
                                    $(".ryan8").css("border-right", ".15em solid transparent")
                                }, 1000)
                            }, 2600)
                        }, 2600)
                    }, 1000)
                }, 2600)
            }, 2600)
        }, 2600)
    }, 2600);
}
const scroll = () => {
    $(window).on("scroll", () => {
        var top = $(window).scrollTop();
        console.log(top);
        if (top > 400) {
            codeBlock();
        }
    })
}
const fadeOut = () => {
    $(".insert").fadeOut(1)
    $("#h3-2").fadeOut(1)
    $("#h3-3").fadeOut(1)
    $("#h3-4").fadeOut(1)
    $("#h3-5").fadeOut(1)
    $("#h3-6").fadeOut(1)
    $("#h3-7").fadeOut(1)
    $("#h3-8").fadeOut(1)
    $("#h3-9").fadeOut(1)
}