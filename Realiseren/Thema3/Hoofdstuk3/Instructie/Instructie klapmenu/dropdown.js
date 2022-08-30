function ShowSomething()
{
    // Bepalen of het element al uitgeklapt is ja/nee
    var clappedOut = document.getElementById("knop1").style.display;

    if(clappedOut == "none")
    {
        document.getElementById("knop1").style.display = "block";
    }
    else
    {
        //Verbergen van het P element
        document.getElementById("knop1").style.display = "none";
    }
}
