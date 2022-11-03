const start_btn=document.querySelector (".but"); 
const info_box=document.querySelector (".info-list");
const input=document.querySelector (".in"); 
const contin=document.querySelector (".bu");
const box=document.querySelector (".qbox");
const result=document.querySelector (".result_box");
const next=document.querySelector (".bul");
const option_list = document.querySelector(".option_list");
const total = document.querySelector(".total_que");
const sco=document.querySelector(".score_text");
const exit=document.querySelector(".restart");
const sub=document.querySelector(".quit");
const timeText = document.querySelector(".timer");
const timeCount = document.querySelector(".timer_sec");

input.addEventListener("keypress", function(event) {

  if (event.key === "Enter") {
   let a=input.value;
   let v=document.getElementById("msg").innerHTML='Welcome '+ a;
   input.style.display='none';
   start_btn.style.display='none';
   info_box.style.display='block';
  }
});
 start_btn.onclick=()=>{
   let a=input.value;
   let v=document.getElementById("msg").innerHTML='Welcome '+ a;
   input.style.display='none';
   start_btn.style.display='none';
   info_box.style.display='block';

}
exit.onclick=()=>{
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
  document.location.reload()
}

 contin.onclick=()=>{
   var elem = document.documentElement;

  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }

  info_box.style.display='none';
  box.style.display='block';
   startTimerLine(15)
   showQuestions(0);
   numq(1);
}

let que_count = 0;
let que = 1;
let scor=0;
let tir=15;
 next.onclick=()=>{
   
   if(que_count<questions.length-1){
   que_count++;
   que++;
  showQuestions(que_count);
  numq(que);
  clearInterval(counterLine);
  startTimerLine(tir);
   
   }
   else{
     result.style.display='flex';
     box.style.display='none';
     
   }
   

}

function showQuestions(index)
{
const text = document.getElementById("que").innerHTML=questions[index].numb + ". " + questions[index].question;
let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[3] +'</span></div>';
   option_list.innerHTML = option_tag; 
  const option = document.querySelectorAll(".option");



  for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
      
   
    }
            
  
}

  
function optionSelected(answer){
 
clearInterval(counterLine);
   let userAns = answer.textContent; 
  
  let correcAns = questions[que_count].answer;
  let alloptions = option_list.children.length;
if(userAns==correcAns){
  scor++;
  
  
  let sor='<span class="sco"><p>'+scor+'</p>/<p>'+ questions.length+'</p></span>'
  sco.innerHTML=sor;

}

    
  

  for (let i = 0; i <alloptions; i++) {
  
option_list.children[i].setAttribute("style", "pointer-events: none;");
   answer.setAttribute("style", "background-color:#f4d8d7;border:none;");
}
}

function numq(que){
  let totl='<span class="foot"><p class="sc">'+ que + '</p>Of<p>'+ questions.length+'</p>Questions</span>';
  total.innerHTML=totl;
}
sub.onclick=()=>{
  alert("your response has been subbimeted");
  
}
function startTimerLine(time){
    counterLine=setInterval(timer, 1000);
  function timer(){ 
    timeCount.innerHTML=time;
    time--;
    if(time<0){
      clearInterval(counterLine);
       let alloptions = option_list.children.length;
        for (let i = 0; i <alloptions; i++) {
 
option_list.children[i].setAttribute("style", "pointer-events: none;");
  
}
    }
    console.log(counterLine);
  }
  
 
    
}
