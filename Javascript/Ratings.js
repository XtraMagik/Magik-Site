function changeSub(num) {
  document.getElementById("Ratings").innerText = say[num];
}


var say = [];
say[0] = "⭐⭐⭐⭐⭐";
say[1] = "⭐⭐⭐⭐⭐";
say[2] = "⭐⭐⭐⭐⭐";
say[3] = "⭐⭐⭐⭐⭐";
say[4] = "⭐⭐⭐⭐⭐";
say[5] = "⭐⭐⭐⭐⭐";
say[6] = "⭐⭐⭐⭐⭐";
say[7] = "⭐⭐⭐⭐⭐";
say[8] = "⭐⭐⭐⭐⭐";
say[9] = "⭐⭐⭐⭐⭐";
say[10] = "⭐⭐⭐⭐";
say[11] = "⭐⭐⭐⭐";
say[12] = "⭐⭐⭐⭐";
say[13] = "⭐⭐⭐⭐";
say[14] = "⭐⭐⭐⭐";
say[15] = "⭐⭐⭐⭐";
say[16] = "⭐⭐⭐⭐";
say[17] = "⭐⭐⭐⭐";
say[18] = "⭐⭐⭐⭐";
say[19] = "⭐⭐⭐⭐";
say[20] = "⭐⭐⭐⭐";
say[21] = "⭐⭐⭐⭐";
say[22] = "⭐⭐⭐⭐";
say[23] = "⭐⭐⭐⭐";
say[24] = "⭐⭐⭐⭐";
say[25] = "⭐⭐⭐⭐";
say[26] = "⭐⭐⭐⭐";
say[27] = "⭐⭐⭐⭐";
say[28] = "⭐⭐⭐⭐";
say[29] = "⭐⭐⭐⭐";
say[30] = "⭐⭐⭐⭐";
say[31] = "⭐⭐⭐⭐";
say[32] = "⭐⭐⭐⭐";
say[33] = "⭐⭐⭐⭐";
say[34] = "⭐⭐⭐⭐";
say[35] = "⭐⭐⭐⭐";
say[36] = "⭐⭐⭐⭐";
say[37] = "⭐⭐⭐⭐";
say[38] = "⭐⭐⭐⭐";
say[39] = "⭐⭐⭐⭐";
say[40] = "⭐⭐⭐";
say[41] = "⭐⭐";
say[42] = "⭐";
say[42] = "An unexpected error occured, please reload."



var howmany = say.length;
var bRand = 0;
bRand = Math.random();
bRand = Math.floor(bRand * howmany);
sayWhat = say[bRand];
document.getElementById("Ratings").innerText = sayWhat;

function changeSplash(num) {
  document.getElementById("Ratings").innerText = say[num];
  var ret = "Set current splash to splash " + num + ", " + say[num];
  return ret;
}
