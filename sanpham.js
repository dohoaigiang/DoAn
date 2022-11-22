const btn = document.querySelectorAll("button")
//console.log(btn)
btn.forEach(function(button,index){
    //console.log(button,index)
    button.addEventListener("click",function(event){{
        var btnItem = event.target
        var product = btnItem.parentElement
        var productImg = product.querySelector("img").src
        var productName = product.querySelector("h4").innerText
        var productPrice = product.querySelector("span").innerText
        console.log(productPrice,productImg,productName)
    }})
})