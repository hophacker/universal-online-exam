/**
 * 
 */
function trim(str) {
    posL = 0;
    posR = str.length - 1;
    while (str.charAt(posL) == ' ' && posL <= posR)
        posL++;
    while (str.charAt(posR) == ' ' && posL <= posR)
        posR--;
    if (posL > posR)
        return "";
    return str.substring(posL, posR + 1);
}
$(function() {
    $("#dialog").dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 300
        },
        hide: {
            effect: "explode",
            duration: 300
        }
    });
});
/**
 * 
 */