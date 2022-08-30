function button1()
{
    document.getElementById("a1").style.display = "block";
    document.getElementById("a2").style.display = "none";
    document.getElementById("a3").style.display = "none";
    document.getElementById("a4").style.display = "none";
    document.getElementById("button1").style.backgroundColor = "#0099cc";
    document.getElementById("button2").style.backgroundColor = "orangered";
    document.getElementById("button3").style.backgroundColor = "orangered";
    document.getElementById("button4").style.backgroundColor = "orangered";
}

function button2()
{
    document.getElementById("a2").style.display = "block";
    document.getElementById("a1").style.display = "none";
    document.getElementById("a3").style.display = "none";
    document.getElementById("a4").style.display = "none";
    document.getElementById("button2").style.backgroundColor = "#0099cc";
    document.getElementById("button1").style.backgroundColor = "orangered"
    document.getElementById("button3").style.backgroundColor = "orangered";
    document.getElementById("button4").style.backgroundColor = "orangered";
}

function button3()
{
    document.getElementById("a3").style.display = "block";
    document.getElementById("a1").style.display = "none";
    document.getElementById("a2").style.display = "none";
    document.getElementById("a4").style.display = "none";
    document.getElementById("button3").style.backgroundColor = "#0099cc";
    document.getElementById("button1").style.backgroundColor = "orangered"
    document.getElementById("button2").style.backgroundColor = "orangered";
    document.getElementById("button4").style.backgroundColor = "orangered";
}

function button4()
{
    document.getElementById("a4").style.display = "block";
    document.getElementById("a1").style.display = "none";
    document.getElementById("a2").style.display = "none";
    document.getElementById("a3").style.display = "none";
    document.getElementById("button4").style.backgroundColor = "#0099cc";
    document.getElementById("button1").style.backgroundColor = "orangered"
    document.getElementById("button2").style.backgroundColor = "orangered";
    document.getElementById("button3").style.backgroundColor = "orangered";
}

// function Search()
// {
//     let input = document.getElementById("searchBar").value
//     input=input.toLowerCase();
//     let x = document.getElementsByClassName("question")
//
//     for (i = 0; i < x.length; i++)
//     {
//         if (!x[i].innerHTML.toLowerCase().includes(input))
//         {
//             x[i].style.display="none";
//         }
//         else {
//             x[i].style.display="block";
//         }
//     }
// }
