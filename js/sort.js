window.onload = function() {
  var link = document.getElementById("price").href;
  link = link.substring(0, link.length - 1);
  if (link === "http://training/pages/blog.php?view=1"){
    document.getElementById("icon-up-price").innerHTML = "↑";
  }
  else if(link === "http://training/pages/blog.php?view=0") {
    document.getElementById("icon-up-price").innerHTML = "↓";
  }else if (link === "http://training/pages/blog.php?date=0") {
    document.getElementById("icon-up-date").innerHTML = "↓";
  }else if (link === "http://training/pages/blog.php?date=1") {
    document.getElementById("icon-up-date").innerHTML = "↑";
  }
}

function func1() {
  var link = document.getElementById("price").href;
  link = link.substring(0, link.length - 1);
  if (link === "http://training/pages/blog.php?view=1"){
    document.getElementById("price").href = "blog.php?view=0";
  }
  else {
    document.getElementById("price").href = "blog.php?view=1";
  }
  return false;
}

function func2() {
  var link = document.getElementById("date").href;
  link = link.substring(0, link.length - 1);
  if (link === "http://training/pages/blog.php?date=1"){
    document.getElementById("date").href = "blog.php?date=0";
    //updown.append('<style>.icon-up::after{content: ↓}</style>');
  }
  else {
    document.getElementById("date").href = "blog.php?date=1";
  }
  return false;
}