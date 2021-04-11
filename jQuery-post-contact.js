$(document).ready(() => {
    fadeOut();
    codeBlock();
})
const fadeOut = () => {
    for (let i = 1; i<=24; i++) {
        $(`#h3-${i}`).fadeOut(1)
    }
}
const codeBlock = () => {
    setTimeout(() => {
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
                                        setTimeout(() => {
                                            $("#h3-10").fadeIn(1) 
                                            $("#h3-10").addClass("ryan10")
                                            $(".ryan9").css("border-right", ".15em solid transparent")
                                            setTimeout(() => {
                                                $("#h3-11").fadeIn(1)
                                                $("#h3-11").addClass("ryan11")
                                                $(".ryan10").css("border-right", ".15em solid transparent")
                                                setTimeout(() => {
                                                    $("#h3-12").fadeIn(1)
                                                    $("#h3-12").addClass("ryan12")
                                                    $(".ryan11").css("border-right", ".15em solid transparent")
                                                    setTimeout(() => {
                                                        $("#h3-13").fadeIn(1)
                                                        $("#h3-13").addClass("ryan13")
                                                        $(".ryan12").css("border-right", ".15em solid transparent")
                                                        setTimeout(() => {
                                                            $("#h3-14").fadeIn(1)
                                                            $("#h3-14").addClass("ryan14")
                                                            $(".ryan13").css("border-right", ".15em solid transparent")
                                                            setTimeout(() => {
                                                                $("#h3-15").fadeIn(1)
                                                                $("#h3-15").addClass("ryan15")
                                                                $(".ryan14").css("border-right", ".15em solid transparent")
                                                                setTimeout(() => {
                                                                    $("#h3-16").fadeIn(1)
                                                                    $("#h3-16").addClass("ryan16")
                                                                    $(".ryan15").css("border-right", ".15em solid transparent")
                                                                    setTimeout(() => {
                                                                        $("#h3-17").fadeIn(1)
                                                                        $("#h3-17").addClass("ryan17")
                                                                        $(".ryan16").css("border-right", ".15em solid transparent")
                                                                        setTimeout(() => {
                                                                            $("#h3-18").fadeIn(1)
                                                                            $("#h3-18").addClass("ryan18")
                                                                            $(".ryan17").css("border-right", ".15em solid transparent")
                                                                            setTimeout(() => {
                                                                                $("#h3-19").fadeIn(1)
                                                                                $("#h3-19").addClass("ryan19")
                                                                                $(".ryan18").css("border-right", ".15em solid transparent")
                                                                                setTimeout(() => {
                                                                                    $("#h3-20").fadeIn(1)
                                                                                    $("#h3-20").addClass("ryan20")
                                                                                    $(".ryan19").css("border-right", ".15em solid transparent")
                                                                                    setTimeout(() => {
                                                                                        $("#h3-21").fadeIn(1)
                                                                                        $("#h3-21").addClass("ryan21")
                                                                                        $(".ryan20").css("border-right", ".15em solid transparent")
                                                                                        setTimeout(() => {
                                                                                            $("#h3-22").fadeIn(1)
                                                                                            $("#h3-22").addClass("ryan22")
                                                                                            $(".ryan21").css("border-right", ".15em solid transparent")
                                                                                            setTimeout(() => {
                                                                                                $("#h3-23").fadeIn(1)
                                                                                                $("#h3-23").addClass("ryan23")
                                                                                                $(".ryan22").css("border-right", ".15em solid transparent")
                                                                                                setTimeout(() => {
                                                                                                    $("#h3-24").fadeIn(1)
                                                                                                    $("#h3-24").addClass("ryan24")
                                                                                                    $(".ryan23").css("border-right", ".15em solid transparent")
                                                                                                    setTimeout(() => {
                                                                                                        window.location.replace("thanks.php")
                                                                                                    }, 1500)
                                                                                                }, 600)
                                                                                            }, 600)
                                                                                        }, 600)
                                                                                    }, 600)
                                                                                }, 600)
                                                                            }, 600)
                                                                        }, 600)
                                                                    }, 600)
                                                                }, 600)
                                                            }, 600)
                                                        }, 600)
                                                    }, 600)
                                                }, 600)
                                            }, 600)
                                        }, 600)
                                    }, 600)
                                }, 600)
                            }, 600)
                        }, 600)
                    }, 600)
                }, 600)
            }, 600)
        }, 600);
    },2600)
}