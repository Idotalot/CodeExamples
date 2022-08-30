function ShowAnswer(element)
{
    var currentBlur = element.style.filter;

    console.log(currentBlur);

    if (currentBlur == "blur(0px)")
    {
        element.style.filter = "blur(5px)"
    }
    else
    {
        element.style.filter = "blur(0px)"
    }
}