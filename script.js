if (classNotif==null){
    var classNotif= []
    classNotif.push(5,9,2,4);
}

document.getElementById("course1notify").innerHTML = classNotif[0]; 
document.getElementById("course2notify").textContent =  classNotif[1];
document.getElementById("course3notify").innerHTML =  classNotif[2];
document.getElementById("course4notify").innerHTML =  classNotif[3];

function notif1(){
    // document.getElementById("course1").removeChild(document.getElementById("course1notify"));
    document.getElementById("course-name").textContent = 'CS 221'; 
    document.getElementById("course-section").textContent = 'Section B';
    document.getElementById("course-prof").textContent = 'Anonymous Professor';
    document.getElementById("course-info").style.backgroundColor = 'linear-gradient(to right, rgba(68, 255, 224, 0.344) , rgba(255, 255, 0, 0))';
}
function notif2(){
    // document.getElementById("course2").removeChild(document.getElementById("course2notify"));
    document.getElementById("course-name").textContent = 'EQ'; 
    document.getElementById("course-section").textContent = 'Section A';
    document.getElementById("course-prof").textContent = 'Non-Anonymous Professor';
    document.getElementById("course-info").style.backgroundColor = 'linear-gradient(to right, rgba(241, 133, 241, 0.344) , rgba(255, 255, 0, 0))';

}
function notif3(){
    // document.getElementById("course3").removeChild(document.getElementById("course3notify"));
    document.getElementById("course-name").innerHTML = 'Algebra 1'; 
    document.getElementById("course-section").innerHTML = 'Section F';
    document.getElementById("course-prof").innerHTML = 'Argyle Wilanthrop';
}
function notif4(){
    // document.getElementById("course4").removeChild(document.getElementById("course4notify"));
    document.getElementById("course-name").innerHTML = 'Theater Stuff'; 
    document.getElementById("course-section").innerHTML = 'Section B';
    document.getElementById("course-prof").innerHTML = 'Martha';
}

function killit(){
    let le = document.getElementById('buttontest');
    document.removeChild(le);
}

function boldDiscussion(){
    document.getElementById('Discussion').style.fontWeight='bold';
    document.getElementById('Roster').style.fontWeight='lighter';
    document.getElementById('Media').style.fontWeight='lighter';

    document.getElementById("roster-list").style.display="none";
}

function boldRoster(){
    document.getElementById('Discussion').style.fontWeight='lighter';
    document.getElementById('Roster').style.fontWeight='bold';
    document.getElementById('Media').style.fontWeight='lighter';

    document.getElementById("discussion-list").style.display="none";
}

function boldMedia(){
    document.getElementById('Discussion').style.fontWeight='lighter';
    document.getElementById('Roster').style.fontWeight='lighter';
    document.getElementById('Media').style.fontWeight='bold';
}

function newPostNull(){

    document.getElementById("createPost").style.margin = "20% 30%";
    
}
function newPostBringback(){
    document.getElementById("createPost").style.margin = "1000px";
}
