$($(document).ready(() => {
    fadeOut();
    $(".photo-wrap-interests").fadeOut(1)
    $(".projects").hover(handlerInProjects, handlerOutProjects) 
    
    scroll();
    onPhotoClick();
    leftArrowClick();
    rightArrowClick();
    imageClick();
}))

const handlerInProjects = () => {
        $("#p").fadeIn(1)
        $("#p").css("display", "inline-block")
    }
const handlerOutProjects = () => {
        $("#p").fadeOut(3500)  
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
                                    setTimeout(() => {
                                        $("#h3-9").removeClass("ryan9")
                                        $("#h3-9").addClass("ryan10")
                                        $(".photo-wrap-interests").fadeIn(1500)
                                    }, 500)
                                }, 1000)
                            }, 1500)
                        }, 1500)
                    }, 1000)
                }, 1500)
            }, 1500)
        }, 1500)
    }, 1500);
}
const scroll = () => {
    $(window).on("scroll", () => {
        var top = $(window).scrollTop();
        console.log(top);
        if (top > 350) {
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
    $(".photo2").css("opacity", "0.5")
    $(".photo3").css("opacity", "0.5")
    $(".photo4").css("opacity", "0.5")
}
const onPhotoClick = () => {
    $("#pho a").on("click", (e) => {
        e.preventDefault();
    })
    $(".photo1").on("click", () => {
        setSmallImg1();
        $(".big-img").fadeOut(250, () => {
            $(".big-img").attr("src", $(".img1").attr("src"))
            pictureHold($(".big-img").attr("src"))
            $(".big-img").fadeIn(250)
        })
        
    })
    $(".photo2").on("click", () => {
        setSmallImg2();
        $(".big-img").fadeOut(250, () => {
            $(".big-img").attr("src", $(".img2").attr("src"))
            pictureHold($(".big-img").attr("src"))
            $(".big-img").fadeIn(250)
        })
    })
    $(".photo3").on("click", () => {
        setSmallImg3();
        $(".big-img").fadeOut(250, () => {
            $(".big-img").attr("src", $(".img3").attr("src"))
            pictureHold($(".big-img").attr("src"))
            $(".big-img").fadeIn(250)
        })
    })
    $(".photo4").on("click", () => {
        setSmallImg4();
        $(".big-img").fadeOut(250, () => {
            $(".big-img").attr("src", $(".img4").attr("src"))
            pictureHold($(".big-img").attr("src"))
            $(".big-img").fadeIn(250)
        })
    })
}

const setSmallImg1 = () => {
    if ($(".photo1").css("opacity") != 1) {
        $(".photo2").css("opacity", "0.5")
        $(".photo3").css("opacity", "0.5")
        $(".photo4").css("opacity", "0.5")
        $(".photo5").css("opacity", "0.5")
        $(".photo1").css("opacity", "1")
    }
}
const setSmallImg2 = () => {
    if ($(".photo2").css("opacity") != 1) {
        $(".photo1").css("opacity", "0.5")
        $(".photo3").css("opacity", "0.5")
        $(".photo4").css("opacity", "0.5")
        $(".photo5").css("opacity", "0.5")
        $(".photo2").css("opacity", "1")
    }
}
const setSmallImg3 = () => {
    if ($(".photo3").css("opacity") != 1) {
        $(".photo2").css("opacity", "0.5")
        $(".photo1").css("opacity", "0.5")
        $(".photo4").css("opacity", "0.5")
        $(".photo5").css("opacity", "0.5")
        $(".photo3").css("opacity", "1")
    }
}
const setSmallImg4 = () => {
    if ($(".photo4").css("opacity") != 1) {
        $(".photo2").css("opacity", "0.5")
        $(".photo3").css("opacity", "0.5")
        $(".photo1").css("opacity", "0.5")
        $(".photo5").css("opacity", "0.5")
        $(".photo4").css("opacity", "1")
    }
}

const pic1 = "./assets/my-pics/25.png";
const pic2 = "./assets/my-pics/26.png";
const pic3 = "./assets/my-pics/27.png";
const pic4 = "./assets/my-pics/28.png";
var pictureSrc = pic1;
const pictureHold = (picture) => {
    pictureSrc = picture;
}
const setBigImg = (pic) => {
    $(".big-img").fadeOut(250, () => {
        $(".big-img").attr("src", pic)
        pictureHold($(".big-img").attr("src"))
        $(".big-img").fadeIn(250)
    })
}
const leftArrowClick = () => {
    $("#a-left").on("click", (e) => {
        e.preventDefault();
        switch (pictureSrc) {
            case pic1: setBigImg(pic4); setSmallImg5(); break;
            case pic2: setBigImg(pic1); setSmallImg1(); break;
            case pic3: setBigImg(pic2); setSmallImg2(); break;
            case pic4: setBigImg(pic3); setSmallImg3(); break;   
        }
    })
}
const imageClick = () => {
    $(".big-img").on("click", () => {
        switch (pictureSrc) {
            case pic1: setBigImg(pic2); setSmallImg2(); break;
            case pic2: setBigImg(pic3); setSmallImg3(); break;
            case pic3: setBigImg(pic4); setSmallImg4(); break;
            case pic4: setBigImg(pic1); setSmallImg1(); break;     
        }
    })
}
const rightArrowClick = () => {
    $("#a-right").on("click", (e) => {
        e.preventDefault();
        switch (pictureSrc) {
            case pic1: setBigImg(pic2); setSmallImg2(); break;
            case pic2: setBigImg(pic3); setSmallImg3(); break;
            case pic3: setBigImg(pic4); setSmallImg4(); break;
            case pic4: setBigImg(pic1); setSmallImg1(); break;     
        }
    })
}