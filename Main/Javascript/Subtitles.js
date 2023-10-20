function changeSub(num) {
  document.getElementById("Subtitle").innerText = say[num];
}


var say = [];
say[0] = "Check out my YouTube channel!";
say[1] = "Welcome to Magik_X Games Version 1!";
say[2] = "Please subscribe to my YouTube channel!";
say[3] = "This website was made using HTML, CSS, and JavaScript";
say[4] = "Yes, I am changing this as you reload";
say[5] = "Me: Did you know a frog can jump higher than an Eiffel Tower? You: Really? Me: That is because an Eiffel Tower cannot jump. 😂";
say[6] = "We now added hover and click sound effects!";
say[7] = "The new and improved Void's Games!";
say[8] = "Spread this website with your family and friends!";
say[9] = "We need all the views we can get to beat our old record on Void's Games!";
say[10] = "Void's Games View Record: 41,274 Views!";
say[11] = "Magik_X Games View Record: 0 Views 😥 (Spread this website please!)";
say[12] = "Have any suggestions? Email me at MagikXPlayz@gmail.com (Link in footer)";
say[13] = "Have any suggestions? You can tell me them in the other section!";
say[14] = "Wanna suggest a song to add to Magik Musik? Fill out the form!";
say[15] = "Wanna suggest a playlist to add to Magik Musik? Fill out the form!";
say[16] = "Wanna suggest an album to add to Magik Musik? Fill out the form!";
say[17] = "0987654321 or 1234567890 is not a good password!";
say[18] = "Check out my friends YouTube channel (Smith_prods!)";
say[19] = "Check out my YouTube channel! (Magik_X!)";
say[20] = "BDRRRRR SKIBIDI DOB, DOB, DOB, DOB, YES, YES, YES!!!";
say[21] = "We have our own soundboard! Link is in the other section!";
say[22] = "Magik Musik is a free music/soundtrack/album player!";
say[23] = "If you have a choice between Disney and Universal, choose Universal!";
say[24] = "Teacher: Why are you talking during my lesson? Me: Why are you teaching during my conversation?";
say[25] = "Teacher: Why are you late to my class? Me: Traffic jam. Teacher: Is that my fault? Me: Did I blame you?";
say[26] = "Me: Did you know that the world famous actor The Rock, is not actually a rock? You: Obviously, no kidding you moron.";
say[27] = "Yeet!";
say[28] = "Me: If the top of a mountain is closer to the sun, why is it colder? Teacher: I think the school needs to give your parents a refund.";
say[29] = "This took too long (Coding takes longer than you think)";
say[30] = "There are 30 of these messages!";



var howmany = say.length;
var bRand = 0;
bRand = Math.random();
bRand = Math.floor(bRand * howmany);
sayWhat = say[bRand];
document.getElementById("Subtitle").innerText = sayWhat;

function changeSplash(num) {
  document.getElementById("Subtitle").innerText = say[num];
  var ret = "Set current splash to splash " + num + ", " + say[num];
  return ret;
}
