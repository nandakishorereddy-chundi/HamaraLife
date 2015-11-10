// Expand Collapse the Div
function expandOrCollapse(acttd, subacttd, panelID) {
    var panelxy = document.getElementById(panelID);
    if (panelxy != null) {
        if ((panelxy.style.visibility == "hidden") || (panelxy.style.visibility == '')) {
            panelxy.style.display = "block";
            panelxy.style.visibility = "visible";
            document.getElementById(acttd).setAttribute('className', 'p');
            document.getElementById(subacttd).setAttribute('className', 't');
            document.getElementById(panelID).setAttribute('className', 'fc');
        } else {
            panelxy.style.display = "none";
            panelxy.style.visibility = "hidden";
            document.getElementById(acttd).setAttribute('className', 'pclear');
            document.getElementById(subacttd).setAttribute('className', 'tclear');
            document.getElementById(panelID).setAttribute('className', 'fcClear');
        }
    }
}


function showHide(Click_Menu, headerImg) {
    var panelxy = document.getElementById(Click_Menu);
    var HdrImg = document.getElementById(headerImg);
    if (panelxy != null) {
        if ((panelxy.style.visibility == "hidden") || (panelxy.style.visibility == '')) {
            panelxy.style.display = "block";
            panelxy.style.visibility = "visible";
            HdrImg.src = "../Images/collapse.jpg";
            HdrImg.alt = "Collapse";
        } else {
            panelxy.style.display = "none";
            panelxy.style.visibility = "hidden";
            HdrImg.src = "../Images/expand.jpg";
            HdrImg.alt = "Expand";
        }
    }
}

function getUrl() {
    var protocal = window.location.protocol;
    var hostname = window.location.host;
    var pathname = window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var secondLevelLocation = pathArray[1];
    //var newUrl = protocal + "//" + hostname + "/" + secondLevelLocation;
    var newUrl = protocal + "//" + hostname;
    return newUrl;
}

function postwith(tar, to, p) {

    var myForm = document.createElement("form");
    myForm.method = "post";
    myForm.target = tar;
    myForm.action = to;
    var arr = p.split(",");
    for (var i = 0; i < arr.length; i++) {
        var inArr = arr[i];
        var secArr = inArr.split(":");
        var myInput = document.createElement("input");
        myInput.setAttribute("name", replaceAll(secArr[0].replace("{", ""), "'", ""));
        myInput.setAttribute("value", replaceAll(secArr[1].replace("}", ""), "'", ""));
        myForm.appendChild(myInput);

    }

    document.body.appendChild(myForm);
    myForm.submit();
    document.body.removeChild(myForm);
}
function replaceAll(txt, replace, with_this) {
    return txt.replace(new RegExp(replace, 'g'), with_this);

}
function postwithCode(tar, to, p) {
    var myForm = document.createElement("form");
    myForm.method = "post";
    myForm.target = tar;
    myForm.action = to;
    for (var k in p) {
        var myInput = document.createElement("input");
        myInput.setAttribute("name", k);
        myInput.setAttribute("value", p[k]);
        myForm.appendChild(myInput);
    }
    document.body.appendChild(myForm);
    myForm.submit();
    document.body.removeChild(myForm);
}

function getResourcesLink() {
    opensecondWindow('Common/Resources.htm', 700, 900, 'Resources');
}


// oPen New window     
function opensecondWindow(Target, height, width, name) {
    var secondWin = null;
    var leftPosition, topPosition;

    if (height == '') height = 600;
    if (width == '') width = 800;

    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);

    var params = "dependent=yes,height=" + height + ",width=" + width + ",toolbar=no,resizable=yes,scrollbars=yes,history=0,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition;

    if ((secondWin) && !(secondWin.closed)) {
        secondWin.close();
    }
    secondWin = window.open(Target, name, params, false);
}


function OpenNewWindow(bigurl, width, height)
{
    var newWindow = window.open("", "pictureViewer", 
        "location=no, directories=no, fullscreen=no, " + 
        "menubar=no, status=no, toolbar=no, width=" + 
        width + ", height=" + height + ", scrollbars=no");
    newWindow.document.writeln("<html>");
    newWindow.document.writeln("<body style='margin: 0 0 0 0;'>");
    newWindow.document.writeln("<a href='javascript:window.close();'>");
    newWindow.document.writeln("<img src='" + bigurl + 
       "' alt='Click to close' id='bigImage'/>");
    newWindow.document.writeln("</a>");
    newWindow.document.writeln("</body></html>");
    newWindow.document.close();
}