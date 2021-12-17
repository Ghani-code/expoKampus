function pencet(){
    var inputan = document.getElementById("masukan").value
    if (inputan == 12345) {
        document.getElementById("salah").innerHTML = "id benar, silahkan pencet submit"
        var elem = document.getElementById("try")
        elem.parentElement.removeChild(elem)

        var link = document.createElement("a")
        link.href = "adminData.php";
        var element = document.getElementsByTagName("div")[0]
        element.appendChild(link)

        var button2 = document.createElement("button")
        button2.className = "submit"
        button2.innerHTML = "submit"
        link.appendChild(button2)
    }
    else if(inputan == ""){
        document.getElementById("salah").innerHTML = "isi id terlebih dahulu"
    }
    else{
        document.getElementById("salah").innerHTML = "id salah"
    }

}